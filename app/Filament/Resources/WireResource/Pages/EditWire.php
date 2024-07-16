<?php

namespace App\Filament\Resources\WireResource\Pages;

use App\Filament\Resources\WireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWire extends EditRecord
{
    protected static string $resource = WireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
