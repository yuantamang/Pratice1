<?php

namespace App\Filament\Resources\DiodeResource\Pages;

use App\Filament\Resources\DiodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDiode extends ViewRecord
{
    protected static string $resource = DiodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
