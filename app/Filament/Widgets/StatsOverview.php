<?php

namespace App\Filament\Widgets;

use App\Models\Aspirasi;
use App\Models\InputAspirasi;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    
    protected ?string $heading = 'Jumlah Aspirasi';
    
    protected ?string $description = 'Ini adalah jumlah aspirasi dari siswa SMKN 1 Lumajang.';
    
    protected ?string $pollingInterval = '60s';

    protected function getStats(): array
        {
            return [
                Stat::make('Total Aspirasi Masuk', InputAspirasi::count())
                    ->description('Semua pesan dari user')
                    ->descriptionIcon('heroicon-m-envelope')
                    ->color('default'),
    
                Stat::make('Terbaca Oleh Guru', Aspirasi::where('status', 'terbaca')->count())
                    ->description('Telah dibaca oleh guru')
                    ->descriptionIcon('heroicon-m-arrow-path')
                    ->color('info'),
                    
                Stat::make('Dalam Proses', Aspirasi::where('status', 'proses')->count())
                    ->description('Proses penanganan')
                    ->descriptionIcon('heroicon-m-arrow-path')
                    ->color('warning'),
                    
                Stat::make('Selesai', Aspirasi::where('status', 'selesai')->count())
                    ->description('Aspirasi tuntas')
                    ->descriptionIcon('heroicon-m-check-badge')
                    ->color('success'),
            ];
        }
}
