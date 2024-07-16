<?php

namespace App\Filament\Resources\ThickWireResource\Pages;

use App\Filament\Resources\ThickWireResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewThickWire extends ViewRecord
{
    protected static string $resource = ThickWireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
