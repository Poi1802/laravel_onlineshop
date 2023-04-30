<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
      'title' => fake()->sentence(),
      'description' => fake()->sentence(20),
      'count' => fake()->numberBetween(50, 200),
      'price' => fake()->numberBetween(1000, 20000),
      'category_id' => Category::all()->random()->id,
      'user_id' => User::all()->random()->id
    ];
  }
}