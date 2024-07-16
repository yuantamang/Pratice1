<?php

namespace App\Filament\Widgets;

use App\Models\wire;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WireOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Wire =wire::count();
        return [
            stat::make("Total Wires",$Wire)
        ];
    }
}
