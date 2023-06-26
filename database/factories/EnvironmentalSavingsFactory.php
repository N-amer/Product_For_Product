<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EnvironmentalSavings>
 */
class EnvironmentalSavingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'user_id' => fake()->numberBetween(1, 10),
        'date' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
        'co2_savings' => fake()->randomFloat(2, 0, 10000),
        'water_savings' => fake()->randomFloat(2, 0, 10000),
        'energy_savings' => fake()->randomFloat(2, 0, 10000),
        'trees_savings' => fake()->randomFloat(2, 0, 10000),
        'raw_materials_savings' => fake()->randomFloat(2, 0, 10000),
        ];
    }
}
