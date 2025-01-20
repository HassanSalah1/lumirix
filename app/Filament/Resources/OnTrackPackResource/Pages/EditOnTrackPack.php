<?php

namespace App\Filament\Resources\OnTrackPackResource\Pages;

use App\Filament\Resources\OnTrackPackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnTrackPack extends EditRecord
{
    protected static string $resource = OnTrackPackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
