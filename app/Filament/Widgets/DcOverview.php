<?php

namespace App\Filament\Widgets;

use App\Models\DcToDc;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DcOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Dc =DcToDc::count();
        return [
            stat::make("Total Dc",$Dc)
        ];
    }
}
