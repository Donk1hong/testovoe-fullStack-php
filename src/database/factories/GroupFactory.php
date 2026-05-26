<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Group>
 */
class GroupFactory extends Factory
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
            'parent_id' => null,
            'name' => fake()->unique()->word()
        ];
    }
}
