<?php

namespace App\Filament\Resources\CampaignResource\RelationManagers;

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
use Filament\Forms\Components\FileUpload;
use App\Models\Video;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Group;

class VideosRelationManager extends RelationManager
{
    protected static string $relationship = 'videos';

    public function form(Form $form): Form
    {
        $video_id =  Video::get()?->pluck('id')->last();
        $video_id = ($video_id != null) ? $video_id+1 : 1;
        $beta_no = 'Perf/'.$video_id.'/'.date('Y');
        // dd($beta_no);
        return $form
            ->schema([
                Section::make('Upload a Video')->schema([
                    FileUpload::make('download_url')
                                    ->disk('public')
                                    ->directory('videos')
                                    ->label('Video File')
                                    ->preserveFilenames() 
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $fileSize = $state->getSize() / (1024 * 1024); // Size in KB
                                        $set('size', number_format($fileSize, 2));
                                    })->columnSpanFull(),
                    TextInput::make('filename')->columnSpanFull(),
                    Group::make()->schema([
                        Group::make()->schema([
                            TextInput::make('name')->required(),
                            TextInput::make('language'),
                            DatePicker::make('deadline'),
                            TextInput::make('caption'),
                        ])->columns(2),
                        
                    ])->columnSpanFull(),        
                    
                    Fieldset::make('Properties')->schema([
                        TextInput::make('length'),
                        TextInput::make('frames'),
                        TextInput::make('size')->disabled(),
                        TextInput::make('beta_no')->label('Tvc ID')->default($beta_no),
                    ])->columns(4),
                   
                ])->columns(4)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('download_url')->label('Filename')
                ->formatStateUsing(function($record) {
                    if($record->download_url != '')
                    {
                        return $record->download_url;
                    }
                    else
                    {
                       return $record->name;
                    }
                }),
                Tables\Columns\TextColumn::make('caption'),
                Tables\Columns\TextColumn::make('Language'),
                Tables\Columns\TextColumn::make('length')->label('Properties')
                ->formatStateUsing(function($record){
                    return "Length: {$record->length} \n Frames: {$record->frames} \n Size: {$record->size}M";
                })->wrap(),
                Tables\Columns\TextColumn::make('beta_no')->label('Tvc ID'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->closeModalByClickingAway(false),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
