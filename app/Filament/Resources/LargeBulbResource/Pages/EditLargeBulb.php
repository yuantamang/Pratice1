<?php

namespace App\Filament\Resources\LargeBulbResource\Pages;

use App\Filament\Resources\LargeBulbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLargeBulb extends EditRecord
{
    protected static string $resource = LargeBulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
