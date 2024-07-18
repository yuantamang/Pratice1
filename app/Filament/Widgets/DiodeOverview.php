<?php

namespace App\Filament\Widgets;

use App\Models\Diode;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DiodeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Diode =Diode::count();
        return [
            stat::make("Total Diode",$Diode)
        ];
    }
}
