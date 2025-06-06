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
        // Ambil jadwal dokter
        $schedule = DoctorSchedule::findOrFail($booking->doctor_schedule_id);

        $today = Carbon::parse($booking->booking_date)->toDateString();

        // Hitung nomor antrian hari itu
        $lastQueue = Booking::whereDate('booking_date', $today)
            ->where('doctor_schedule_id', $booking->doctor_schedule_id)
            ->max('queue_number');

        // Hitung estimasi waktu (misal: 15 menit per antrian)
        $queueNumber = $lastQueue ? $lastQueue + 1 : 1;
        $booking->queue_number = $queueNumber;

        $estimatedTime = Carbon::parse($schedule->start_time)
            ->addMinutes(15 * ($queueNumber - 1));
        $booking->estimated_time = $estimatedTime->format('H:i');

         // Generate kode unik booking
        $randomCode = strtoupper(Str::random(5)) . now()->format('Ymd');
        $booking->code = 'BOOK-' . $randomCode;
    }

    public function created(Booking $booking) // Dipanggil setelah data berhasil dimasukkan ke database (dengan id sudah tersedia).
    {
        $qrContent = "Kode Booking: {$booking->code}\nAntrian: {$booking->queue_number}\nJam: {$booking->estimated_time}";

        // Buat instance DNS2D
        $barcode = new DNS2D();

        // Dapatkan base64 QR Code
        $qrImageBase64 = $barcode->getBarcodePNG($qrContent, 'QRCODE');

        // Buat PDF
        $pdf = PDF::loadView('pdf.booking', [
            'booking' => $booking,
            'qrImageBase64' => $qrImageBase64,
        ]);

        return $pdf->stream("booking_{$booking->id}.pdf");

        $booking->saveQuietly();
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
