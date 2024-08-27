<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; 
use App\Models\Video;

class VideoTable extends Component
{

    public $channelID = '';
    public $campaignId;
    public $videos = [];
    public $selectedRows = [];
    public $checkedItems = [];

    public function mount($campaignId)
    {
        $this->campaignId = $campaignId;
        $this->loadVideos();
    }

    public function loadVideos()
    {
        $this->videos = Video::where('campaign_id', $this->campaignId)->get();
    }

    public function toggleVideoSelectAll()
    {
        if(count($this->selectedRows) === Video::where('campaign_id', $this->campaignId)->count()) {
            $this->selectedRows = []; 
        } else {
            $this->selectedRows = Video::where('campaign_id', $this->campaignId)->pluck('id')->toArray();
        }
        
    }



    #[On('channelsSelected')]
    public  function handleNewPost($selected)
    {
        //
        $this->channelID = $selected;
        
    }
    public function render()
    {
        // dd($this->campaignID);
        $channelID = $this->channelID;
        return view('livewire.video-table', ['channelID' => $this->channelID, 'videos' => $this->videos]);
    }
}
