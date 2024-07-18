<?php

namespace App\Filament\Widgets;

use App\Models\AcToAc;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AcOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Ac =AcToAc::count();
        return [
            stat::make("Total Ac",$Ac)
        ];
    }
}
