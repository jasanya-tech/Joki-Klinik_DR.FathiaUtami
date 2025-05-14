<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Doctor;
use App\Models\Status;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DoctorSchedule;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DoctorScheduleResource\Pages;
use App\Filament\Resources\DoctorScheduleResource\RelationManagers;
use Carbon\Carbon;

class DoctorScheduleResource extends Resource
{
    protected static ?string $model = DoctorSchedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    protected static ?string $navigationGroup = 'Doctor Management';

    protected static ?string $navigationLabel = 'Doctor Schedule';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('doctor_id')
                    ->required()
                    ->searchable()
                    ->options(Doctor::with('user')->get()->pluck('user.name', 'id'))
                    ->label('Doctor Name')
                    ->columnSpan(2),
                Section::make('Doctor Schedule')
                    ->description('Prevent abuse by limiting the number of requests per period')
                    ->icon('heroicon-m-clock')
                    ->columns(3)
                    ->schema([
                        Select::make('day')
                            ->label('Day')
                            ->options([
                                'Monday'    => 'Monday',
                                'Tuesday'   => 'Tuesday',
                                'Wednesday' => 'Wednesday',
                                'Thursday'  => 'Thursday',
                                'Friday'    => 'Friday',
                                'Saturday'  => 'Saturday',
                                'Sunday'    => 'Sunday',
                            ])
                            ->required()
                            ->searchable(),
                        TimePicker::make('start_time')
                            ->required()
                            ->native(false),
                        TimePicker::make('end_time')
                            ->required()
                            ->native(false), 
                    ]),
                Select::make('status_id')
                    ->required()
                    ->label('Status')
                    ->searchable()
                    ->options(Status::all()->pluck('name', 'id')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('doctor.user.name')
                    ->label('Doctor Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('day')
                    ->label('Day')
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
                TextColumn::make('status.name')
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('createdBy.name')
                    ->label('Created By'),
                TextColumn::make('updatedBy.name')
                    ->label("Updated by"),
                TextColumn::make('deletedBy.name')
                    ->label("Deleted by"),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoctorSchedules::route('/'),
            'create' => Pages\CreateDoctorSchedule::route('/create'),
            'edit' => Pages\EditDoctorSchedule::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
