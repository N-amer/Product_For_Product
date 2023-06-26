<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->randomElement(['paper', 'baker', 'tissue', 'plastic', 'leftover_food', 'clothes', 'glas', 'electric_device', 'metal'], $count = 10  , $allowDuplicates = false),
            'image' => 'image.png'
        ];
    }
}
