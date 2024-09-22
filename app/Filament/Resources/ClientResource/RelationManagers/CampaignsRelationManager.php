<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use App\Models\Campaign;
use App\Models\Channel;
use App\Models\setting;
use App\Models\Video;
use App\Models\Email;
use App\Models\OrderDetail;
use App\Models\Report;
use App\Mail\CampaignVideoSelectionMail;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;

use Filament\Forms\Components\Wizard\Step;

class CampaignsRelationManager extends RelationManager
{
    protected static string $relationship = 'campaigns';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Add a Campaign')->schema([
                    TextInput::make('name')->required(),
                    // Select::make('client_id')->relationship('client', 'name')->required(),
                    TextInput::make('agency')->required(),
                    TextInput::make('brand')->required(),
                    RichEditor::make('description')->disableAllToolbarButtons(),
                    Checkbox::make('status')->required()
                ])->columns(1)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->sortable()
                ->url(fn ($record) => route('filament.admin.resources.campaigns.edit', ['record' => $record->id])),
                Tables\Columns\TextColumn::make('agency'),
                Tables\Columns\TextColumn::make('brand'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')->label('Created On')->date()->toggleable()
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Action::make('Mail')
                ->icon('heroicon-m-envelope')
                ->iconButton()
                ->label('Send Email to Channels')
               
                ->steps(fn ($record) => static::getWizardForm($record))
                ->action(function (array $data, $record): void {
                    if (session()->get('channel_id')==null) {
                        Notification::make()
                            ->title('Error')
                            ->body('Please select a Channel')
                            ->danger()
                            ->send();
                        
                        return; // Stop further processing if there is an error
                    }

                    if (session()->get('selected_videos')==null) {
                        Notification::make()
                            ->title('Error')
                            ->body('Please select a video')
                            ->danger()
                            ->send();
                        
                        return; // Stop further processing if there is an error
                    }
                    $message = $data['message'];
                    $channels = Channel::whereIn('id', session()->get('channel_id'))->select('id', 'name', 'email')->get()->toArray();
                    
                    foreach($channels as $channel)
                    {
                        $channelName = $channel['name'];
                        $channelToEmail = $channel['email'];
                        $clientName = $record->client->name;
                        $clientToEmail = $record->client->email;
                        $campaign = $record;
                        $videos = Video::whereIn('id', session()->get('selected_videos'))->get()->toArray();
                        
                        $email = Email::create([
                            'channel_id' => $channel['id'],
                            'video_ids' => json_encode(session()->get('selected_videos')),
                            'sending_date_time' => Carbon::now(), 
                        ]);
                        // dd($email);
                        $order = OrderDetail::create([
                            'email_id' => $email->id
                        ]);
                        $subject = "Ad delivered: ID-".($order->id) .", TITLE-".$videos[0]['caption'].", BRAND-".$campaign->brand;
                        $to = $channelToEmail;
                        // $to ='sujayverma124@gmail.com';
                        $to .= ',studios@abaccusproductions.com';
                        $rep = explode(',', $to);
                        if(Mail::to($rep)->bcc([$clientToEmail])->send(new CampaignVideoSelectionMail($channelName, $channelToEmail, $clientName, $clientToEmail, $campaign, $videos, $order->id, $campaign->brand, $campaign->agency, $subject, $message)))
                        {
                            Email::where('id', $email->id)->update([
                            'email_subject' => $subject,
                            'status' => 'delivered',
                            'delivered_date_time' => Carbon::now(),
                            ]);
                            static::addReport($order->id, $channelName, $campaign->name, $clientName, $campaign->brand, $campaign->agency, $email->id, $videos);
                            // Handle the case where the mail failed to send
                            Notification::make()
                                ->title('Success')
                                ->body('Mail Sending Succesfully!')
                                ->success()
                                ->send();
                            // return;
                        }
                        else
                        {
                            Email::where('id', $email->id)->update([
                                'email_subject' => $subject,
                                'status' => 'failed',
                            ]);
                            // Handle the case where the mail failed to send
                             Notification::make()
                                ->title('Error')
                                ->body('Mail Sending Failed')
                                ->danger()
                                ->send();
                            // return;    
                        }

                    }
                }),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    protected static function getWizardForm($record): array
    {
       
        return [
                    Step::make('Select Channels')
                        ->schema([
                            Forms\Components\View::make('livewire-channel-table')
                            ]),
                            
                    Step::make('Select Videos')
                        ->schema([
                            Forms\Components\View::make('livewire-video-table')
                            ->viewData(['campaignId' => $record->id])
                        ]),
                     
                        
                    Step::make('Email Contents')
                        ->schema([
                            TextInput::make('message')->required()->default('Kindly download your videos from the given link'),
                            RichEditor::make('Email')->disableAllToolbarButtons()
                            ->default(setting::where('setting_key', 'email_message')->pluck('setting_value')->first()),
                           
                            // Fields for the third step
                        ]),
                   
        ];
    }


    protected static function addReport($orderId, $channelName, $campaignName, $clientName, $brand, $agency, $emailID, $videos)
    {
        foreach($videos as $video)
        {
            $report = Report::create(
                [
                    'order_id' => $orderId,
                    'email_id' => $emailID,
                    'channel_name' => $channelName,
                    'title' => $campaignName,
                    'client_name' => $clientName,
                    'brand_name' => $brand,
                    'duration' => $video['length'],
                    'language' => $video['language'],
                    'tvc_id' => $video['beta_no'],
                    'agency' => $agency
                ]
            );
        }
        
    }
}
