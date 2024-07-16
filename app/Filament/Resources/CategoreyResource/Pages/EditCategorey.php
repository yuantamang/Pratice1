<?php

namespace App\Filament\Resources\CategoreyResource\Pages;

use App\Filament\Resources\CategoreyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategorey extends EditRecord
{
    protected static string $resource = CategoreyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
