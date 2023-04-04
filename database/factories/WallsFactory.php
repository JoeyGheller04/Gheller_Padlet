<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Walls>
 */
class WallsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->biasedNumberBetween(1,3),
            'name' => Str::limit(fake()->paragraph(1), $limit = 30),
            'description' => fake()->text(),
        ];
    }
}
