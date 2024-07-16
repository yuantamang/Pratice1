<?php

namespace App\Filament\Resources\BulbResource\Pages;

use App\Filament\Resources\BulbResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBulb extends ViewRecord
{
    protected static string $resource = BulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
