<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportsExport;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

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
                //
                Tables\Columns\TextColumn::make('order_id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('channel_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('client_name'),
                Tables\Columns\TextColumn::make('brand_name'),
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('language'),
                Tables\Columns\TextColumn::make('tvc_id'),
                Tables\Columns\TextColumn::make('email.delivered_date_time')->label('Status Date'),
                Tables\Columns\TextColumn::make('email.attach_type')->label('Sent As'),
                Tables\Columns\TextColumn::make('agency')
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
                    Tables\Actions\BulkAction::make('export')
                    ->label('Export TO Excel')
                    ->action(function (array $records){
                        return Excel::download(new ReportsExport($records), 'reports.xlsx');
                    }),
                    // Tables\Actions\DeleteBulkAction::make(),

                ]),
            ]);
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}
