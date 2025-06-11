<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use App\Models\DoctorSchedule;
use Illuminate\Support\Carbon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class DoctorScheduleTable extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    protected static ?string $heading = 'List Doctor Schedule';

    public function table(Table $table): Table
    {
        return $table
            ->query(DoctorSchedule::query()->with('doctor', 'status'))
            ->defaultPaginationPageOption(5)
            ->columns([
                ImageColumn::make('doctor.user.avatar_url')
                    ->label('Images')
                    ->circular()
                    ->size(70)
                    ->defaultImageUrl(asset('images/doctor1.png')),
                TextColumn::make('doctor.user.name')
                    ->label('Doctor Name')
                    ->sortable(),
                TextColumn::make('doctor.spesialis')
                    ->label('Doctor Spesialis')
                    ->sortable(),
                TextColumn::make('day')
                    ->label('Day')
                    ->badge()
                    ->color('info')
                    ->sortable(),
                TextColumn::make('start_time')
                    ->label('Start Time')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('H:i') . ' WIB';
                    }),
                TextColumn::make('end_time')
                    ->label('End Time')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('H:i') . ' WIB';
                    }),
            ])
            ->searchable();
    }
}
