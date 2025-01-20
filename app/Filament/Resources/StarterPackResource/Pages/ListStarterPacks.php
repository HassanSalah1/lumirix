<?php

namespace App\Filament\Resources\StarterPackResource\Pages;

use App\Filament\Resources\StarterPackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStarterPacks extends ListRecords
{
    protected static string $resource = StarterPackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
