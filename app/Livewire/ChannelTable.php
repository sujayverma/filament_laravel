<?php

namespace App\Http\Livewire;

use App\Models\Channel;
use Filament\Tables;
use Livewire\Component;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Support\Contracts\TranslatableContentDriver;

class ChannelTable extends Component implements HasTable
{
    use Tables\Concerns\InteractsWithTable;

    public $channels; // Store channels separately if needed

    public function mount()
    {
        // Load the channels initially. You can customize the query as needed.
        $this->channels = Channel::all()->take(10); // Temporarily limit data
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                CheckboxColumn::make('selected')
                    ->label('Select')
                    ->toggleable()
                    ->bulkToggleable(),
                TextColumn::make('name')
                    ->label('Channel Name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('search')
                    ->query(fn ($query, $search) => $query->where('name', 'like', "%{$search}%")),
            ])
            ->query(fn () => Channel::query()->limit(10)) // Ensure query is efficient to prevent looping
            ->paginated(10) // Number of items per page
            ->defaultSort('name'); // Default sorting
    }

    public function render()
    {
        logger('Rendering ChannelTable Component');
        return view('livewire.channel-table'); // Avoid directly binding dynamic queries here
    }

    public function makeFilamentTranslatableContentDriver(): ?TranslatableContentDriver
    {
        return null; // Return null as we're not using translatable content
    }
}