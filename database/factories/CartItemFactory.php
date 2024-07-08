<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\MovieHour;
use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'cart_id' => Cart::all()->random(1)[0]->id,
            'movie_hour_id' => MovieHour::all()->random(1)[0]->id,
            'seat' => strtoupper($this->faker->randomLetter()) . $this->faker->numberBetween(1, 10),
            'price' => Price::all()->random(1)[0]->value,
        ];
    }
}
