<?php

namespace App\Filament\Resources\DiodeResource\Pages;

use App\Filament\Resources\DiodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiode extends EditRecord
{
    protected static string $resource = DiodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
