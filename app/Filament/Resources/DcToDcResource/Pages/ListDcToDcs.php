<?php

namespace App\Filament\Resources\DcToDcResource\Pages;

use App\Filament\Resources\DcToDcResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDcToDcs extends ListRecords
{
    protected static string $resource = DcToDcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
