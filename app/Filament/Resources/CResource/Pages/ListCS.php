<?php

namespace App\Filament\Resources\CResource\Pages;

use App\Filament\Resources\CResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCS extends ListRecords
{
    protected static string $resource = CResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
