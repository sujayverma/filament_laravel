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
    public $checkedVideoItems = [];

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
        // dd($this->selectedRows);
    }

    public function handleVideoCheckboxChange($value)
    {
        if (isset($this->checkedVideoItems[$value])) 
        {
            $i = 0;
            foreach($this->checkedVideoItems as $key=>$value)
            {
                if($value)
                    $this->selectedRows[$i] = $key;  
                $i++;
            }
            $this->resetSession();
            session()->put('channel_id', $this->channelID);
            session()->put('selected_videos', $this->selectedRows);
            dd(session()->get('selected_videos'));

            // $this->addVideo($this->channelID, $this->selectedRows);
            
        } 
    }

    public function addVideo(int $channelID, array $videoIDs)
    {
        $this->dispatch('moveToStep3', $channelID, $videoIDs);
    }

    #[On('channelsSelected')]
    public  function handleNewPost($selected)
    {
        $this->channelID = $selected;
    }

    #[On('moveToStep3')]
    public function handleNewVideos(int $channelID, array $videoIDs): void
    {
        $this->resetSession();
        session()->put('channel_id', $channelID);
        session()->put('selected_videos', $videoIDs);
       
    }

    public function resetSession()
    {
        session()->forget(['channel_id', 'selected_videos']);
    }

    public function render()
    {
        // dd($this->campaignID);
        $channelID = $this->channelID;
        return view('livewire.video-table', ['channelID' => $this->channelID, 'videos' => $this->videos]);
    }
}
