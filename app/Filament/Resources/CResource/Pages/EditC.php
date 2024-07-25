<?php

namespace App\Filament\Resources\CResource\Pages;

use App\Filament\Resources\CResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditC extends EditRecord
{
    protected static string $resource = CResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
