<?php

namespace App\Filament\Resources\LargeBulbResource\Pages;

use App\Filament\Resources\LargeBulbResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLargeBulb extends ViewRecord
{
    protected static string $resource = LargeBulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
