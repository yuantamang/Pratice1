<?php

namespace App\Filament\Resources\SmallBulbResource\Pages;

use App\Filament\Resources\SmallBulbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmallBulb extends EditRecord
{
    protected static string $resource = SmallBulbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
