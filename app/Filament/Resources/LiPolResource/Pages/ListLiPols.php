<?php

namespace App\Filament\Resources\LiPolResource\Pages;

use App\Filament\Resources\LiPolResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLiPols extends ListRecords
{
    protected static string $resource = LiPolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
