<?php

namespace App\Filament\Resources\DiodeResource\Pages;

use App\Filament\Resources\DiodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiodes extends ListRecords
{
    protected static string $resource = DiodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
