<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'output'=> fake()->name(),
            'quantity' => fake()->randomElement([200, 123, 1231]),
            'price' => 1233,
            'date' => now(),
            'id_user' => 1,
        ];
    }
}
