<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weekday' => $this->faker->unique()->randomElement([1, 2, 3, 4, 5, 6, 7]),
            'value' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
