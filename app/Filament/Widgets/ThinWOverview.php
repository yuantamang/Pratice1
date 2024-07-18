<?php

namespace App\Filament\Widgets;

use App\Models\ThinWire;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ThinWOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $ThinWire =ThinWire::count();
        return [
            stat::make("Total ThinWire",$ThinWire)
        ];
    }
}
