<?php

namespace App\Filament\Widgets;

use App\Models\Battery;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BatteryOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Battery =Battery::count();
        return [
            stat::make("Total Battery",$Battery)
        ];
    }
}
