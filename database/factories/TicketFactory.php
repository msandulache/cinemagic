<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\MovieHour;
use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Booking::all()->random(1)[0]->id,
            'movie_hour_id' => MovieHour::all()->random(1)[0]->id,
            'seat' => strtoupper($this->faker->randomLetter()) . $this->faker->numberBetween(1, 10),
            'price' => Price::all()->random(1)[0]->value,
        ];
    }
}
