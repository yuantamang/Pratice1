<?php

namespace App\Filament\Resources\DcToDcResource\Pages;

use App\Filament\Resources\DcToDcResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDcToDc extends EditRecord
{
    protected static string $resource = DcToDcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
