<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Models\Booking;
use Filament\Tables\Table;
use Illuminate\Support\Carbon;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class BookingTable extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 3;

    protected static ?string $heading = 'List Booking';

    public function table(Table $table): Table
    {
        return $table
            ->query(Booking::query()->with('doctorSchedule', 'user'))
            ->defaultPaginationPageOption(5)
            ->columns([
                TextColumn::make('user.name')
                    ->label('Patient Name')
                    ->sortable(),
                TextColumn::make('doctorSchedule.doctor.user.name')
                    ->label('Doctor')
                    ->sortable(),
                TextColumn::make('doctorSchedule.day')
                    ->label('Day')
                    ->badge()
                    ->color('primary')
                    ->sortable(),
                TextColumn::make('doctorSchedule.start_time')
                    ->label('Booking Time')
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('H:i') . ' WIB';
                    })
                    ->sortable(),
                TextColumn::make('complaint')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('doctor_feedback')
                    ->limit(50)
                    ->searchable(),
            ])
            ->searchable();
    }
}
