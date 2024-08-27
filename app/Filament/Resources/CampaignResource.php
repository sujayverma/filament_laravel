<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CampaignResource\Pages;
use App\Filament\Resources\CampaignResource\RelationManagers;
use App\Models\Campaign;
use App\Models\Channel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Button;
use Filament\Resources\Resource;
use Livewire\Livewire;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Filament\Resources\Str;
use App\View\Components\ChannelTable;
use Filament\Forms\Components\Repeater;

class CampaignResource extends Resource
{
    protected static ?string $model = Campaign::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Add a Campaign')->schema([
                    TextInput::make('name')->required(),
                    Select::make('client_id')->relationship('client', 'name')->required(),
                    TextInput::make('agency')->required(),
                    TextInput::make('brand')->required(),
                    RichEditor::make('description')->disableAllToolbarButtons(),
                    Checkbox::make('status')->required()
                ])->columns(1)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->sortable(),
                Tables\Columns\TextColumn::make('client.name')->sortable(),
                Tables\Columns\TextColumn::make('agency'),
                Tables\Columns\TextColumn::make('brand'),
                Tables\Columns\TextColumn::make('created_at')->label('Created On')->date()->toggleable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Mail')
                ->icon('heroicon-m-envelope')
                ->iconButton()
                ->label('Mail')
                ->form(fn ($record) => static::getWizardForm($record))
                ->action(function (array $data): void {
                    dd($data);
                    // $record->author()->associate($data['authorId']);
                    // $record->save();
                }),
                Tables\Actions\EditAction::make()->label(''),
                Tables\Actions\DeleteAction::make()->label(''),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
            RelationManagers\VideosRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCampaigns::route('/'),
            'create' => Pages\CreateCampaign::route('/create'),
            'edit' => Pages\EditCampaign::route('/{record}/edit'),
        ];
    }


    protected static function getWizardForm($record): array
    {
        $currentStep = 1;
        return [
            Wizard::make()
                ->steps([
                    Step::make('Select Channels')
                        ->schema([
                           
                            
                            Forms\Components\View::make('livewire-channel-table')
                            // ->data(['search' => fn($get) => $get('search')]), // Bind the search state,
                            ]),
                            
                    Step::make('Select Videos')
                        ->schema([
                            Hidden::make('campaign_id')
                            ->default($record->id), // Store the current campaign ID in a hidden field
                            Forms\Components\View::make('livewire-video-table')
                            ->viewData(['campaignId' => $record->id])
                            // ->data(['campaignId' => $record->id]), 
                        ]),
                     
                        
                    Step::make('Final Step')
                        ->schema([
                            // Fields for the third step
                        ]),
                    ])
                    // ->nextAction(
                    //     fn (Forms\Components\Actions\Action $action) => $action
                    //     ->label('Next step')
                    //      ->extraAttributes([
                    //             'wire:click' => 'nextStepClicked', // Pass data as argument
                    //         ])
                    //     ->action(function () {
                            
                    //         // Emitting the event to a specific Livewire component
                    //         // Livewire::find('livewire.channel-table-custom')->emit('nextStepClicked');
            
                    //         // Additional logic for handling the next step...
                    //     }),
                    // ),
                    
                // ->action(function (array $data, Channel $record): void {
                //     // $record->author()->associate($data['authorId']);
                //     // $record->save();
                //     dd($data);
                // }),
        ];
    }

    

   
}
