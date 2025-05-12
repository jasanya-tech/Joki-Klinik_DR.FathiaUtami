<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $user = auth()->user();
        return [
            Stat::make('Jumlah Konten', '242')
                ->description('Konten')
                ->descriptionIcon('heroicon-m-pencil')
                ->chart([2, 3, 35, 18, 15, 26, 15, 30, 25, 30, 25, 50])
                ->color('success'),
            Stat::make('Jumlah Dokter', '23')
                ->description('Dokter')
                ->descriptionIcon('heroicon-m-heart')
                ->chart([32, 23, 35, 18, 15, 56, 15, 30, 25, 30, 25, 30])
                ->color('warning'),
            Stat::make('Jumlah Pasien', '17')
                ->description('Pasien')
                ->descriptionIcon('heroicon-m-users')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('info'),
        ];
    }
}
