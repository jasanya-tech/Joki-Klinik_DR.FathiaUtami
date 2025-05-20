<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\StatusType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listStatusType = [
            "id" => 2,
            "name" => "Booking Status",
            "desc" => "Booking status",
            "active" => 1,
        ];
        StatusType::insert($listStatusType);

        $listStatus = [
            [
                'id' => 4,
                'status_type_id' => 2,
                'name' => 'PENDING',
                "desc" => 'Status for pending',
                'active' => true,
            ],
            [
                'id' => 5,
                'status_type_id' => 2,
                'name' => 'CANCELLED',
                "desc" => 'Status for cancelled',
                'active' => true,
            ],
            [
                'id' => 6,
                'status_type_id' => 2,
                'name' => 'COMPLETED',
                "desc" => 'Status for completed',
                'active' => true,
            ],
            [
                'id' => 7,
                'status_type_id' => 2,
                'name' => 'NO_SHOW',
                "desc" => 'Status for no show',
                'active' => true,
            ],
        ];
        Status::insert($listStatus);
    }
}
