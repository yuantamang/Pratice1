<?php

namespace App\Filament\Resources\CResource\Pages;

use App\Filament\Resources\CResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewC extends ViewRecord
{
    protected static string $resource = CResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
