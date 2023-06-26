<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'image' => 'image.png',
            'plant' => fake()->numberBetween(10, 30),
            'country' => fake()->country(),
            'sale' => fake()->numberBetween(20, 40),
            'green_point' => fake()->numberBetween(40, 60),
            'user_id' => User::factory(),
            'category_id' => Category::factory()
        ];
    }
}
