<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Channel;
use Illuminate\Support\Collection;

class ChannelTableCustom extends Component
{
    // protected $listeners = ['nextStepClicked'];
    public $search = '';
    public $selected = '';

    public $selectedRows = [];

    public $searchTerm = '';

    public $checkedItems = [];

    public function toggleSelectAll()
    {
        if(count($this->selectedRows) === Channel::count()) {
            $this->selectedRows = []; 
        } else {
            $this->selectedRows = Channel::pluck('id')->toArray();
        }
        
    }

    public function handleCheckboxChange($value)
    {
        if (isset($this->checkedItems[$value]) && $this->checkedItems[$value]) 
        {
            $this->addRows($value);
        } else {
            $this->addRows('');
        }
        
    }



    public function addRows($value, $extraData = null)
    {
        $this->selected = $value;
        $this->dispatch('channelsSelected', $this->selected);
    }

    public function search()
    {
        // Access the current value of the input using the bound property
        $searchValue = $this->searchTerm;
        
    }

    public function validateData()
    {
        $this->validate();
       
    }

    public function getListeners()
    {
        return [
            'nextStepClicked' => 'handleNextStepClicked',
        ];
    }

   
    public function render()
    {
        $channels = Channel::query()
            ->where('name', 'like', "%{$this->search}%")
            ->orderBy('id', 'desc')
            ->get();
        return view('livewire.channel-table-custom', compact('channels'));
    }
}
