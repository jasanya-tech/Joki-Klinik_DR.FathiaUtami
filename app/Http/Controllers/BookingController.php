<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\BokkingRequest;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $bookings = Booking::all();
        return view('pages.booking', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BokkingRequest $request)
    {
        try {
            $booking = Booking::create([
                'user_id' => auth()->id(),
                'doctor_schedule_id' => $request->doctor_schedule_id,
                'complaint' => $request->complaint,
                'booking_date' => $request->booking_date,
            ]);

            return response()->json([
                'message' => 'Booking berhasil dibuat',
                'data' => $booking
            ]);
        } catch (\Exception $e) {
            return redirect('/home')->with('error', 'Booking Gagal: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
