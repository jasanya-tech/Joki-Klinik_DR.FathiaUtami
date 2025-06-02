<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
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
}
