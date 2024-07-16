<?php

namespace App\Filament\Widgets;

use App\Models\bulb;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BulbOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Bulb =bulb::count();
        return [
            stat::make("Total Bulbs",$Bulb)
        ];
    }
}
