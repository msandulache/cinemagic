<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::factory(100)->create();
    }
}
