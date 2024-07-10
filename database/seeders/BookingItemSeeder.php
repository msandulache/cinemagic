<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\BookingItem;
use Illuminate\Database\Seeder;

class BookingItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookingItem::factory(20)->create();
    }
}
