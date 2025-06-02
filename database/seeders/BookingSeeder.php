<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booking = 
            [
                'id' => 1,
                'user_id' => 1,
                'doctor_schedule_id' => 1,
                'code' => '1212331',
                'complaint' => 'Badan saya terasa lemas dan tidak bertenaga',
                'doctor_feedback' => 'Dokter nya sangat ramah dan berkata bijak',
                'booking_date' => '2024-06-10',
                'status_id' => 4,
            ];
        Booking::insert($booking);
    }
}
