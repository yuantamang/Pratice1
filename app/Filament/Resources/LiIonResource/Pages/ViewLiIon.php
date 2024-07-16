<?php

namespace App\Filament\Resources\LiIonResource\Pages;

use App\Filament\Resources\LiIonResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLiIon extends ViewRecord
{
    protected static string $resource = LiIonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
