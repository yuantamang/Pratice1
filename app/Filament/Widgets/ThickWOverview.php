<?php

namespace App\Filament\Widgets;

use App\Models\ThickWire;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ThickWOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $ThickWire =ThickWire::count();
        return [
            stat::make("Total ThickWire",$ThickWire)
        ];
    }
}
