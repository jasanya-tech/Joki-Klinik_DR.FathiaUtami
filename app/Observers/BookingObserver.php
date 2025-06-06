<?php

namespace App\Observers;

use App\Models\Booking;
use App\Models\DoctorSchedule;
use Illuminate\Support\Carbon;

class BookingObserver
{
    /**
     * Handle the Booking "created" event.
     */
    public function creating(Booking $booking)
    {
        $schedule = DoctorSchedule::findOrFail($booking->doctor_schedule_id);

        // Pastikan booking_date ter-parse
        $today = Carbon::parse($booking->booking_date)->toDateString();

        $lastQueue = Booking::whereDate('booking_date', $today)
            ->where('doctor_schedule_id', $booking->doctor_schedule_id)
            ->max('queue_number');

        $queueNumber = $lastQueue ? $lastQueue + 1 : 1;
        $booking->queue_number = $queueNumber;

        $estimatedTime = Carbon::parse($schedule->start_time)
            ->addMinutes(15 * ($queueNumber - 1));
        $booking->estimated_time = $estimatedTime->format('H:i');

        $randomCode = strtoupper(Str::random(5)) . now()->format('Ymd');
        $booking->code = 'BOOK-' . $randomCode;
    }

    /**
     * Handle the Booking "updated" event.
     */
    public function updated(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "deleted" event.
     */
    public function deleted(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "restored" event.
     */
    public function restored(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "force deleted" event.
     */
    public function forceDeleted(Booking $booking): void
    {
        //
    }
}
