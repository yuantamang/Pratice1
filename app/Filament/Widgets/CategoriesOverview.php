<?php

namespace App\Filament\Widgets;

use App\Models\Categorey;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoriesOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $Categories =Categorey::count();
        return [
            stat::make("Total Categories",$Categories)
        ];
    }
}
