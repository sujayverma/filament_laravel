<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; 

class VideoTable extends Component
{

    public $campaignID = '';

    // #[On('channelsSelected')]
    // public  function handleNewPost($selected)
    // {
    //     //
    //     $this->campaignID = $selected;
    //     // dd($selected);
    //     // return $selected;
        
    // }
    // public function render()
    // {
    //     // dd($this->campaignID);
    //     $campaign = $this->campaignID;
    //     return view('livewire.video-table', compact('campaign'));
    // }
}
