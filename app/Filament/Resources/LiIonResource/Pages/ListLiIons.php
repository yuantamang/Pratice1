<?php

namespace App\Filament\Resources\LiIonResource\Pages;

use App\Filament\Resources\LiIonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLiIons extends ListRecords
{
    protected static string $resource = LiIonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
