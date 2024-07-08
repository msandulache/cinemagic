<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tmdb_id' => $this->faker->randomDigitNotNull(),
            'title' => $this->faker->sentence(3),
            'original_title' => $this->faker->sentence(3),
            'overview' => $this->faker->paragraph(),
            'poster_path' => $this->faker->imageUrl(),
            'trailer' => $this->faker->word(),
            'runtime' => $this->faker->randomDigitNotNull(),
            'is_premium' => $this->faker->boolean,
        ];
    }
}
