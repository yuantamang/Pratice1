<?php

namespace App\Filament\Resources\SmallBulbResource\Pages;

use App\Filament\Resources\SmallBulbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmallBulbs extends ListRecords
{
    protected static string $resource = SmallBulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
