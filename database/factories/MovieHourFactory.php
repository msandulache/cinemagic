<?php

namespace Database\Factories;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class MovieHourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => Movie::all()->random(1)[0]->id,
            'hour' => Carbon::create(
                date('Y') . '-' .
                $this->faker->date('m-d ') .
                $this->faker->randomElement(['20', '17', '14', '11']) .
                ':00'
            )
        ];
    }
}
