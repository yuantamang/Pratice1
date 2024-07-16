<?php

namespace App\Filament\Resources\WireResource\Pages;

use App\Filament\Resources\WireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWires extends ListRecords
{
    protected static string $resource = WireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
