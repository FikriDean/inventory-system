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
            'product_type_id' => rand(1, 5),
            'name' => fake()->text(10),
            'product_weight_kg' => rand(0.01, 1000),
            'price' => fake()->numberBetween(20, 400),
            'stock' => fake()->numberBetween(1122, 3534),
        ];
    }
}
