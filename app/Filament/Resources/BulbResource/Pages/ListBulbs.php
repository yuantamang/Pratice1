<?php

namespace App\Filament\Resources\BulbResource\Pages;

use App\Filament\Resources\BulbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBulbs extends ListRecords
{
    protected static string $resource = BulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
