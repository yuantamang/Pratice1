<?php

namespace App\Filament\Resources\ThinWireResource\Pages;

use App\Filament\Resources\ThinWireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThinWire extends EditRecord
{
    protected static string $resource = ThinWireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
