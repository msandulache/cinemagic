<?php

namespace Database\Factories;

use App\Models\OrderStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random(1)[0]->id,
            'billing_customer' => $this->faker->name(),
            'billing_email' => $this->faker->unique()->safeEmail(),
            'billing_phone' => $this->faker->phoneNumber(),
            'billing_address' => $this->faker->address(),
            'billing_city' => $this->faker->city(),
            'order_status_id' => OrderStatus::all()->random(1)[0]->id,
        ];
    }
}
