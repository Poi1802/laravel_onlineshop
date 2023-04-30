<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    \App\Models\User::factory(10)->create();

    \App\Models\User::factory()->create([
      'name' => 'Eugen',
      'email' => 'evgen@mail.ru',
      'password' => Hash::make('fyufhcr123'),
      'role' => 1
    ]);

    Color::factory(20)->create();
    Tag::factory(40)->create();
    Category::factory(20)->create();
    Product::factory(100)->create();

    foreach (Product::all() as $product) {
      $tags = Tag::all()->random(4);
      $colors = Color::all()->random(4);

      foreach ($tags as $tag) {
        $product->tags()->attach($tag->id);
      }

      foreach ($colors as $color) {
        $product->colors()->attach($color->id);
      }
    }
  }
}