<?php

namespace App\Observers;

use App\Models\Booking;
use Milon\Barcode\DNS2D;
use Illuminate\Support\Str;
use App\Models\DoctorSchedule;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BookingObserver
{
    /**
     * Handle the Booking "created" event.
     */
    public function creating(Booking $booking) // Dipanggil sebelum data dimasukkan ke database.
    {
        $today = Carbon::parse($booking->booking_date)->toDateString();

        // Hitung nomor antrian hari itu
        $lastQueue = Booking::whereDate('booking_date', $today)
            ->max('queue_number');

        // Hitung estimasi waktu (misal: 15 menit per antrian)
        $queueNumber = $lastQueue ? $lastQueue + 1 : 1;
        $booking->queue_number = $queueNumber;

        // Estimasi waktu mulai dari booking_date jam 08:00
        $baseTime = Carbon::parse($booking->booking_date . ' 08:00');
        $estimatedTime = $baseTime->addMinutes(15 * ($queueNumber - 1));
        $booking->estimated_time = $estimatedTime->format('H:i');

        // Generate kode unik booking
        $randomCode = strtoupper(Str::random(5)) . now()->format('Ymd');
        $booking->code = 'BOOK-' . $randomCode;
    }

    public function created(Booking $booking) // Dipanggil setelah data berhasil dimasukkan ke database (dengan id sudah tersedia).
    {
        
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
