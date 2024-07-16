<?php

namespace App\Filament\Resources\BulbResource\Pages;

use App\Filament\Resources\BulbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBulb extends EditRecord
{
    protected static string $resource = BulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
