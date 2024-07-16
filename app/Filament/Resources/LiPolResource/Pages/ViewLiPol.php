<?php

namespace App\Filament\Resources\LiPolResource\Pages;

use App\Filament\Resources\LiPolResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLiPol extends ViewRecord
{
    protected static string $resource = LiPolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
