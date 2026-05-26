<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
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
            'group_id' => null,
            'name' => fake()->words(3, true)
        ];
    }
}
