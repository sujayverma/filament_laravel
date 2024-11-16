<?php

namespace App\Filament\Resources\ChannelResource\Pages;

use App\Filament\Resources\ChannelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\CreateRecordAndRedirectToIndex;

class CreateChannel extends CreateRecordAndRedirectToIndex
{
    protected static string $resource = ChannelResource::class;
}
