<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OnlineCommunity>
 */
class OnlineCommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'user_id' => fake()->numberBetween(1, 10),
            'participation_date' => fake()->dateTimeThisYear(),
        ];
    }
}
