<?php

namespace App\Filament\Resources\ThinWireResource\Pages;

use App\Filament\Resources\ThinWireResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewThinWire extends ViewRecord
{
    protected static string $resource = ThinWireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
