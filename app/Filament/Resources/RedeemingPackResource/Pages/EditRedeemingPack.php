<?php

namespace App\Filament\Resources\RedeemingPackResource\Pages;

use App\Filament\Resources\RedeemingPackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRedeemingPack extends EditRecord
{
    protected static string $resource = RedeemingPackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
