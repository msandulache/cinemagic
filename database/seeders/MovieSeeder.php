<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieHour;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::factory(10)->create()->each(function (Movie $movie) {
            $genres = Genre::all()->random(rand(1, 3));
            $movie->genres()->attach($genres);

            $actors = Actor::all()->random(rand(1, 5));
            $movie->actors()->attach($actors);

            $movie->save();
        });
    }
}
