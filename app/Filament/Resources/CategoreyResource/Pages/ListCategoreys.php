<?php

namespace App\Filament\Resources\CategoreyResource\Pages;

use App\Filament\Resources\CategoreyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoreys extends ListRecords
{
    protected static string $resource = CategoreyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
