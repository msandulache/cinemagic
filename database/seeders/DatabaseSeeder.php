<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $this->call([
            PriceSeeder::class,
            GenreSeeder::class,
            ActorSeeder::class,
            MovieSeeder::class,
            MovieHourSeeder::class,
            BookingSeeder::class,
            SeatSeeder::class,
            OrderStatusSeeder::class,
            OrderSeeder::class,
            TicketSeeder::class,
            InvoiceSeeder::class,
            InvoiceItemSeeder::class
        ]);


    }
}
