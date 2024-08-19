<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Channel;

class ChannelTable extends Component
{
    public function render()
    {
        return view('livewire.channel-table',['channels'=>Channel::all()]);
    }
}
