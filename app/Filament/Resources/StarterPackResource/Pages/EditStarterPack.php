<?php

namespace App\Filament\Resources\StarterPackResource\Pages;

use App\Filament\Resources\StarterPackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStarterPack extends EditRecord
{
    protected static string $resource = StarterPackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
