<?php

namespace App\Filament\Resources\AcToAcResource\Pages;

use App\Filament\Resources\AcToAcResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcToAc extends EditRecord
{
    protected static string $resource = AcToAcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
