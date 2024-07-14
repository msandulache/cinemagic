<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Seat;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seat::factory(20)->create();
    }
}
