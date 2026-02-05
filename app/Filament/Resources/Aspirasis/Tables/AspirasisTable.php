<?php

namespace App\Filament\Resources\Aspirasis\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AspirasisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('input_aspirasi.nama_siswa')
                    ->label('Siswa')
                    ->searchable(),
                TextColumn::make('input_aspirasi.aspirasi_siswa')
                    ->label('Aspirasi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                ->badge()
                ->colors(fn (string $state): string => match ($state) {
                    'Terkirim' => 'red',
                    'Terbaca' => 'blue',
                    'Diproses' => 'yellow',
                    'Selesai' => 'green',
                    default => 'gray',
                })
                    ->searchable()
                    ->sortable()
                    ->default('Terkirim'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
