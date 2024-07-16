<?php

namespace App\Filament\Resources\ThinWireResource\Pages;

use App\Filament\Resources\ThinWireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThinWires extends ListRecords
{
    protected static string $resource = ThinWireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
