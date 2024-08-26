<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CampaignWizard extends Component
{
    public $selectedChannels = [];

    public function mount()
    {
        $this->registerListeners();
    }

    protected function registerListeners()
    {
        // Registering a listener for the 'selectedChannels' event
        $this->listeners = [
            'selectedChannels' => 'updateSelectedChannels'
        ];
    }

    public function updateSelectedChannels($selected)
    {
        // Update the selected channels state
        $this->selectedChannels = $selected;
    }

    public function render()
    {
        // Pass the selectedChannels to the view
        return view('livewire.campaign-wizard', [
            'selectedChannels' => $this->selectedChannels,
        ]);
    }
}