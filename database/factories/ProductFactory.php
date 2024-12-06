<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->numberBetween(1, 100), // Random quantity between 1 and 100
            'image' => $this->faker->imageUrl(640, 480, 'products'), // Fake product image URL
            'price' => $this->faker->randomFloat(2, 10, 100), // Random price between 10 and 100 with 2 decimal places
        ];
    }
}
