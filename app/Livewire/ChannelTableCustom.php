<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Channel;
use Illuminate\Support\Collection;

class ChannelTableCustom extends Component
{
    public $search = '';
    public $selected = '';

    public $selectedRows = [];

    public $searchTerm = '';

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

    public function addRows($value, $extraData = null)
    {
        $this->selected = $value;
    }

    public function search()
    {
        // Access the current value of the input using the bound property
        $searchValue = $this->searchTerm;
        dd($searchValue);
    }

    public function validateData()
    {
        $this->validate();
       
    }

   
    

    public function render()
    {
        $channels = Channel::query()
            ->where('name', 'like', "%{$this->search}%")
            ->get();
        return view('livewire.channel-table-custom', compact('channels'));
    }
}
