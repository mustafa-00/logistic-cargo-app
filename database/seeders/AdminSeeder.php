<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'phone' => '0729848903',
                'DoB' => "2000-02-22",
                'role' => 'admin',
                'password' => '$2y$10$j.oBPr/KWUT8L7M7Lt1mguT0HrEv7jdPJywRhHa7Bb6uYfFoi3mhe' // password
            ]);
    }
}
