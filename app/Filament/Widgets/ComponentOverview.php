<?php

namespace App\Filament\Widgets;

use App\Models\component;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ComponentOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Component =component::count();
        return [
            stat::make("Total Components",$Component)
        ];
    }
}
