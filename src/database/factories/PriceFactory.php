<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // Оставил factory для тестов, чтобы было удобнее
    public function definition(): array
    {
        return [
            'product_id' => null,
            'price' => fake()->randomFloat(2, 100, 500000),
        ];
    }
}
