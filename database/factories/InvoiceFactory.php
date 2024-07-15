<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => 'INV-' .$this->faker->numberBetween(1000000000,9000000000),
            'order_id' => Order::all()->random(1)[0]->id,
            'date' => $this->faker->date,
            'due_date' => $this->faker->date,
            'billing_customer' => $this->faker->name(),
            'billing_email' => $this->faker->unique()->safeEmail(),
            'billing_phone' => $this->faker->phoneNumber(),
            'billing_address' => $this->faker->address(),
            'billing_city' => $this->faker->city(),
        ];
    }
}
