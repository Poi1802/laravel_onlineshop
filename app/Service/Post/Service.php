<?php

namespace App\Service\Post;

use App\Models\Product;
use App\Models\ProductImg;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
  public function store($data)
  {
    try {
      DB::beginTransaction();

      $data['user_id'] = 1;
      if (!isset($data['published']))
        $data['published'] = 0;

      $tags = $data['tags'];
      $colors = $data['colors'];
      $imgs = $data['imgs'];
      unset($data['tags'], $data['colors'], $data['imgs']);

      $product = Product::create($data);

      $product->colors()->attach($colors);
      $product->tags()->attach($tags);

      $this->uploadImages($imgs, $product->id);

      DB::commit();
    } catch (\Exception $ex) {
      DB::rollBack();
      dd($ex);
    }
  }

  public function update($data)
  {
    try {
      DB::beginTransaction();

      $data['user_id'] = 1;
      if (!isset($data['published']))
        $data['published'] = 0;

      $tags = $data['tags'];
      $colors = $data['colors'];
      $imgs = $data['imgs'];
      unset($data['tags'], $data['colors'], $data['imgs']);

      $product = Product::create($data);

      $product->colors()->attach($colors);
      $product->tags()->attach($tags);

      $this->uploadImages($imgs, $product->id);

      DB::commit();
    } catch (\Exception $ex) {
      DB::rollBack();
      dd($ex);
    }
  }

  public function uploadImages(array $imgs, $product_id)
  {
    foreach ($imgs as $key => $img) {
      $data['path'] = 'storage/' . Storage::disk('public')->put('/images', $img);
      $data['url'] = url($data['path']);
      $data['product_id'] = $product_id;

      ProductImg::create($data);
    }
  }
}