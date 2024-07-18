<?php

namespace App\Filament\Widgets;

use App\Models\LiIon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class IonOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $LiIon =LiIon::count();
        return [
            stat::make("Total LiIon",$LiIon)
        ];
    }
}
