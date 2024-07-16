<?php

namespace App\Filament\Resources\ThickWireResource\Pages;

use App\Filament\Resources\ThickWireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThickWires extends ListRecords
{
    protected static string $resource = ThickWireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
