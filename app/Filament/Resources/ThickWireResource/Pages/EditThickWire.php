<?php

namespace App\Filament\Resources\ThickWireResource\Pages;

use App\Filament\Resources\ThickWireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThickWire extends EditRecord
{
    protected static string $resource = ThickWireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
