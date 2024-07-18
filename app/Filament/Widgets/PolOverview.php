<?php

namespace App\Filament\Widgets;

use App\Models\LiPol;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PolOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $LiPol =LiPol::count();
        return [
            stat::make("Total LiPol",$LiPol)
        ];
    }
}
