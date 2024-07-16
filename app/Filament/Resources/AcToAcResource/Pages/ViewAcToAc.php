<?php

namespace App\Filament\Resources\AcToAcResource\Pages;

use App\Filament\Resources\AcToAcResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAcToAc extends ViewRecord
{
    protected static string $resource = AcToAcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
