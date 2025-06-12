<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nilai pencarian dari request, jika ada
        $search = $request->query('search');

        // Mulai query untuk model Doctor
        $doctors = Doctor::with('user');

        // Jika ada nilai pencarian, tambahkan kondisi WHERE
        if ($search) {
            $doctors->where('name', 'LIKE', '%' . $search . '%');
        }

        // Terapkan paginasi pada hasil query
        $doctors = $doctors->paginate(10); // Sesuaikan jumlah item per halaman sesuai kebutuhan Anda

    
        // Kembalikan view dengan data dokter dan nilai pencarian (untuk mengisi kembali input search)
        return view('user.doctors.index', compact('doctors', 'search'));
    }


    public function show($id)
    {
        // Ambil data dokter dengan relasi user
        $doctor = Doctor::with(['user', 'schedules'])->findOrFail($id);
        

        // Kembalikan view dengan data dokter
        return view('user.doctors.show', compact('doctor'));
    }

    function appoinment($id)
    {
        // Ambil data dokter dengan relasi user
        $doctorData = Doctor::with(['user', 'schedules'])->findOrFail($id);


        // Kembalikan view dengan data dokter
        return view('user.doctors.appoinment', compact('doctorData'));
    }

    public function appoinmentStore(Request $request)
    {
        // Validasi input
        $request->validate([
            'doctor_id' => 'required|exists:doctor,id',
            'complaint' => 'required|string|max:255',
            'booking_date' => 'required|date',
        ]);

        // Simpan data booking
        $booking = new \App\Models\Booking();
        $booking->user_id = auth()->id();
        $booking->doctor_id = $request->doctor_id;
        $booking->complaint = $request->complaint;
        $booking->booking_date = Carbon::parse($request->booking_date)->format('Y-m-d'); // Format tanggal booking
        $booking->status_id = 1; // Status
        $booking->created_by = auth()->id(); // ID user yang membuat booking
        $booking->save();

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Booking berhasil dibuat!'); 
    }
        

}
