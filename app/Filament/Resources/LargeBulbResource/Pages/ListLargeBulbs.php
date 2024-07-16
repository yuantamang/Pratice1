<?php

namespace App\Filament\Resources\LargeBulbResource\Pages;

use App\Filament\Resources\LargeBulbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLargeBulbs extends ListRecords
{
    protected static string $resource = LargeBulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
