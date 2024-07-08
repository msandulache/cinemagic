<?php

namespace Database\Seeders;

use App\Models\MovieHour;
use App\Models\Price;
use Illuminate\Database\Seeder;

class MovieHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MovieHour::factory(20)->create();
    }
}
