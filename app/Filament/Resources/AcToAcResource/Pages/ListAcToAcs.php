<?php

namespace App\Filament\Resources\AcToAcResource\Pages;

use App\Filament\Resources\AcToAcResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcToAcs extends ListRecords
{
    protected static string $resource = AcToAcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
