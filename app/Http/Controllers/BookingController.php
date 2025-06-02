<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use Illuminate\Support\Carbon;
use App\Http\Requests\BokkingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BokkingRequest $request)
    {
        // Ambil jadwal dokter
        $schedule = DoctorSchedule::findOrFail($request->doctor_schedule_id);

        // Hitung nomor antrian hari itu
        $today = Carbon::parse($request->booking_date)->toDateString();
        $lastQueue = Booking::whereDate('booking_date', $today)
            ->where('doctor_schedule_id', $schedule->id)
            ->max('queue_number');

        $queueNumber = $lastQueue ? $lastQueue + 1 : 1;

        // Hitung estimasi waktu (misal: 15 menit per antrian)
        $estimatedTime = Carbon::parse($schedule->start_time)
            ->addMinutes(15 * ($queueNumber - 1));

        // Generate kode unik booking
        $randomCode = strtoupper(Str::random(5)) . now()->format('Ymd');
        $bookingCode = 'BOOK-' . $randomCode;
        
        // Simpan booking
        $booking = Booking::create([
            'user_id' => $request->user_id,
            'doctor_schedule_id' => $request->doctor_schedule_id,
            'code' => $bookingCode,
            'complaint' => $request->complaint,
            'booking_date' => $today,
            'queue_number' => $queueNumber,
            'estimated_time' => $estimatedTime->format('H:i'),
        ]);

        // Buat QR Code
        $qrContent = "Kode Booking: $booking->code\nAntrian: $queueNumber\nJam: $estimatedTime";
        $qrPath = "qrcodes/booking_{$booking->id}.png";
        QrCode::format('png')->size(300)->generate($qrContent, public_path("storage/{$qrPath}"));
        $booking->qr_code_path = $qrPath;

        // Buat PDF
        $pdf = Pdf::loadView('pdf.booking', ['booking' => $booking]);
        $pdfPath = "pdfs/booking_{$booking->id}.pdf";
        Storage::put("public/{$pdfPath}", $pdf->output());
        $booking->pdf_path = $pdfPath;

        $booking->save();

        return response()->json([
            'message' => 'Booking berhasil dibuat',
            'data' => $booking
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
}
