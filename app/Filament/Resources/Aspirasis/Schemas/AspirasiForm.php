<?php

namespace App\Filament\Resources\Aspirasis\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AspirasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->schema([
                    TextEntry::make('info_aspirasi')
                        ->label('Detail Aspirasi'),
        
                    Select::make('status')
                        ->options([
                            'terkirim' => 'Terkirim',
                            'terbaca' => 'Terbaca',
                            'proses' => 'Proses',
                            'selesai' => 'Selesai',
                        ])
                        ->required(),
                ]);
    }
}
