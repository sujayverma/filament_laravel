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
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Button;
use Filament\Resources\Resource;

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
                Tables\Columns\TextColumn::make('status'),
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
        return [
            Wizard::make()
                ->steps([
                    Step::make('Select Channels')
                        ->schema([
                            TextInput::make('search')
                                ->label('Search Channels')
                                ->placeholder('Search channels...')
                                ->reactive()
                                ->afterStateUpdated(function ($state, $get, $set) {
                                    // You may pass search state to the livewire component if needed
                                    $set('search', $state); // Set the search state // Set the search state
                                }),
                            
                            Forms\Components\View::make('livewire-channel-table')
                            // ->data(['search' => fn($get) => $get('search')]), // Bind the search state,
                        ]),
                    Step::make('Another Step')
                        ->schema([
                            // Fields for the second step
                        ]),
                    Step::make('Final Step')
                        ->schema([
                            // Fields for the third step
                        ]),
                    ]),
                // ->action(function (array $data, Channel $record): void {
                //     // $record->author()->associate($data['authorId']);
                //     // $record->save();
                //     dd($data);
                // }),
        ];
    }

}
