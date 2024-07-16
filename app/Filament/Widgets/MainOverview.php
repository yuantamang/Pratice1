<?php

namespace App\Filament\Widgets;

use App\Models\Categorey;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MainOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Product =Product::count();
        return [
            stat::make("Total Products",$Product)
        ];
    }
}
