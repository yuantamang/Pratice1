<?php

namespace App\Filament\Widgets;

use App\Models\largeBulb;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LargebOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $largeBulb =largeBulb::count();
        return [
            stat::make("Total LargeBulb",$largeBulb)
        ];
    }
}
