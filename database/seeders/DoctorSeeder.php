<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctor = 
            [
                'id' => 1,
                'user_id' => 2,
                'nip' => '19210887',
                'spesialis' => 'Hewan Prasejarah',
                'price' => 1000000,
                'status_id' => 1,
            ];
        Doctor::insert($doctor);

        $doctorSchedule =
            [
                [
                    'id' => 1,
                    'doctor_id' => 1,
                    'day' => 'Monday',
                    'start_time' => '08:00:00',
                    'end_time' => '17:00:00',
                    'status_id' => 1,
                ],
                [
                    'id' => 2,
                    'doctor_id' => 1,
                    'day' => 'Tuesday',
                    'start_time' => '10:00:00',
                    'end_time' => '18:00:00',
                    'status_id' => 1,
                ],
                [
                    'id' => 3,
                    'doctor_id' => 1,
                    'day' => 'Wednesday',
                    'start_time' => '12:00:00',
                    'end_time' => '19:00:00',
                    'status_id' => 1,
                ],
            ];
        DoctorSchedule::insert($doctorSchedule);
    }
}
