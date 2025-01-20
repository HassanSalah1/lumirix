<?php

namespace App\Filament\Resources\OnTrackPackResource\Pages;

use App\Filament\Resources\OnTrackPackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnTrackPacks extends ListRecords
{
    protected static string $resource = OnTrackPackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
