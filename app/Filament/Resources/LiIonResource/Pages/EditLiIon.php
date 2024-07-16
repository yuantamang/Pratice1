<?php

namespace App\Filament\Resources\LiIonResource\Pages;

use App\Filament\Resources\LiIonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLiIon extends EditRecord
{
    protected static string $resource = LiIonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
