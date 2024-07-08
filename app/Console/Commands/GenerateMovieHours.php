<?php

namespace App\Console\Commands;

use App\Models\Movie;
use App\Models\MovieHour;
use Illuminate\Console\Command;

class GenerateMovieHours extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:movie-hours';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $weekDays = [ date("Y-m-d") ];
        $hours = [ '11', '14', '17', '20'];

        foreach ($weekDays as $weekDay) {
            foreach ($hours as $hour) {
                MovieHour::create([
                    'movie_id' => 1,
                    'day' => $weekDay,
                    'hour' => $hour . ':00',
                ]);
            }
        }
    }
}
