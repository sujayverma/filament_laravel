<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Channel;

class ChannelTable extends Component
{
    public $selectedRows = [];

    protected $rules = [
        'selectedRows' => 'required|array|min:1', // Example validation rule
    ];
    public function toggleSelectAll()
    {
        if(count($this->selectedRows) === Channel::count()) {
            $this->selectedRows = []; 
        } else {
            $this->selectedRows = Channel::pluck('id')->toArray();
        }

    }

    public function validateData()
    {
        $this->validate();
       
    }
    public function render()
    {
        return view('livewire.channel-table',['channels'=>Channel::all()]);
    }
}
