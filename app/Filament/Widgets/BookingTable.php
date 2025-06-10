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
                TextColumn::make('code')
                    ->label('Booking Code')
                    ->badge()
                    ->color('info')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Patient Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('booking_date')
                    ->label('Booking Date')
                    ->sortable(),
                TextColumn::make('queue_number')
                    ->label('Queqeu Date')
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
