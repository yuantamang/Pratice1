<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\component;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EveryOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $product =Product::all();
        $Category =Category::all();
        $SubCategory =SubCategory::all();
        $Order =Order::all();
        $Component =component::all();
        return [
            stat::make("Total Product",$product),
            stat::make("Total Category",$Category),
            stat::make("Total SubCategory",$SubCategory),
            stat::make("Total Order",$Order),
            stat::make("Total Component",$Component),
        ];
    }
}
