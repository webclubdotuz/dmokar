<?php

namespace App\Filament\Widgets;

use App\Models\Partner;
use App\Models\Post;
use App\Models\Traveler;
use App\Models\WhatToSee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Новости', Post::count())
                ->description('Всего публикаций')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary')
                ->chart([7, 3, 5, 8, 4, 6]),
            Stat::make('Что посмотреть', WhatToSee::count())
                ->description('Достопримечательности')
                ->descriptionIcon('heroicon-m-map-pin')
                ->color('success'),
            Stat::make('Тур пакеты', Traveler::count())
                ->description('Активных туров')
                ->descriptionIcon('heroicon-m-globe-alt')
                ->color('warning'),
            Stat::make('Партнёры', Partner::count())
                ->description('Организации')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('info'),
        ];
    }
}
