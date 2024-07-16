<?php

namespace App\Filament\Resources\LiPolResource\Pages;

use App\Filament\Resources\LiPolResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLiPol extends EditRecord
{
    protected static string $resource = LiPolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
