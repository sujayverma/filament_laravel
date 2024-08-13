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

class VideosRelationManager extends RelationManager
{
    protected static string $relationship = 'videos';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Add a Video')->schema([
                    TextInput::make('name')->required(),
                    FileUpload::make('download_url')
                                    ->disk('public')
                                    ->directory('videos')
                                    ->label('Video File') 
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $fileSize = $state->getSize() / (1024 * 1024); // Size in KB
                                        $set('size', number_format($fileSize, 2));
                                    }),
                    TextInput::make('length'),
                    TextInput::make('frames'),
                    TextInput::make('size')->disabled(),
                    TextInput::make('language'),
                    TextInput::make('deadline'),
                    TextInput::make('beta_no'),
                    Checkbox::make('status')->required()
                   
                ])->columns(1)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
