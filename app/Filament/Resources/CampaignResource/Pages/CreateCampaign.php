<?php

namespace App\Filament\Resources\CampaignResource\Pages;

use App\Filament\Resources\CampaignResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\CreateRecordAndRedirectToIndex;

class CreateCampaign extends CreateRecordAndRedirectToIndex
{
    protected static string $resource = CampaignResource::class;
}
