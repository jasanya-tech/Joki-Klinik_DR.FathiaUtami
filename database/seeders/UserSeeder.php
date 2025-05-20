<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "id" => 1,
                'name' => 'Admin',
                'email' => "admin@gmail.com",
                'password' => bcrypt('12345678'),
                'phone_number' => '08123456789',
                'avatar_url' => 'default.png',
                'role' => 'admin',
                'status_id' => 1,         
            ],
            [
                "id" => 2,
                'name' => 'DR. Brando S.Gpt',
                'email' => "doctor@gmail.com",
                'password' => bcrypt('12345678'),
                'phone_number' => '08123456789',
                'avatar_url' => 'default.png',
                'role' => 'doctor',
                'status_id' => 1,
            ],
            [
                "id" => 3,
                'name' => 'Dani Alfaest',
                'email' => "dani@gmail.com",
                'password' => bcrypt('12345678'),
                'phone_number' => '08123456789',
                'avatar_url' => 'default.png',
                'role' => 'user',
                'status_id' => 1,
            ]
        ];
        User::insert($user);
    }
}
