<?php

namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\ClientResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\CreateRecordAndRedirectToIndex;

class CreateClient extends CreateRecordAndRedirectToIndex
{
    protected static string $resource = ClientResource::class;
}
