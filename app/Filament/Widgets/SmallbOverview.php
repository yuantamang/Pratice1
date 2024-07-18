<?php

namespace App\Filament\Widgets;

use App\Models\SmallBulb;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SmallbOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $smallBulb =SmallBulb::count();
        return [
            stat::make("Total SmallBulb",$smallBulb)
        ];
    }
}
