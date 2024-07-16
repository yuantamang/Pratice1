<?php

namespace App\Filament\Widgets;

use App\Models\booster;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BoosterOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Booster =booster::count();
        return [
            stat::make("Total Booster",$Booster)
        ];
    }
}
