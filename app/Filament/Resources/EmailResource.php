<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmailResource\Pages;
use App\Filament\Resources\EmailResource\RelationManagers;
use App\Models\Email;
use App\Models\Video;
use App\Models\Channel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Collection;

class EmailResource extends Resource
{
    protected static ?string $model = Email::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ])
            ->disabled();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('channel_id')
                ->sortable()
                ->searchable()
                ->label('Channel')
                ->formatStateUsing(function($state, $record){
                    $channelID = $record->channel_id;
                    $channelName = Channel::where('id', $channelID)->pluck('name')->first();
                    return $channelName;
                }),
                Tables\Columns\TextColumn::make('video_ids')
                ->sortable()
                ->searchable()
                ->label('Video')
                ->formatStateUsing(function($state, $record){
                    // dd($record->video_ids);
                    $videoStr = substr($record->video_ids, 1, -1);
                    $videoIDs = preg_replace('/"/', '', $videoStr);
                    if(strpos($videoIDs, ','))
                    {
                        $videoArr = explode(',', $videoIDs);
                    }
                    else
                    {
                        $videoArr = [$videoIDs];
                    }
                    
                    $videos = Video::whereIn('id', $videoArr)->pluck('name')->toArray(); // Fetch category names

                    return count($videos) > 0 ? implode(', ', $videos) : "Video File Deleted";
                }),
                Tables\Columns\TextColumn::make('email_subject')->wrap()->sortable()->searchable(),
                Tables\Columns\IconColumn::make('status')
                ->icon(fn (string $state): string => match ($state) {
                    'failed' => 'heroicon-o-pencil',
                    'pending' => 'heroicon-o-clock', 
                    'delivered' => 'heroicon-o-check-circle',
                }),
                Tables\Columns\TextColumn::make('sending_date_time')->wrap()->label('Request Time'),
                Tables\Columns\TextColumn::make('delivered_date_time')->wrap()->label('Delivery Time'),

               
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('print')
                    ->label('Print Selected')
                    ->action(fn (Collection  $records) => static::printRecords($records))
                    ->requiresConfirmation(),
                ]),
            ]);
    }

    public static function printRecords(Collection  $records)
    {
        
        // Here you can implement your print logic
        // This might involve generating a PDF or redirecting to a print-friendly page

        // For demonstration, let's assume we're just redirecting to a print page
        $ids = $records->pluck('id')->implode(','); // Get the IDs of the selected records
        
        return redirect()->route('posts.print', ['ids' => $ids]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmails::route('/'),
            //'create' => Pages\CreateEmail::route('/create'),
            //'edit' => Pages\EditEmail::route('/{record}/edit'),
        ];
    }
}
