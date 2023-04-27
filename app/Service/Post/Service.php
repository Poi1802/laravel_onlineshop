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

  public function update($data, $product)
  {
    try {
      DB::beginTransaction();

      $data['user_id'] = 1;

      if (!isset($data['published'])) {
        $data['published'] = 0;
      }

      if (isset($data['imgs'])) {
        $imgs = $data['imgs'];
        unset($data['imgs']);

        $paths = $this->uploadImages($imgs, $product->id);
      }

      $tags = $data['tags'];
      $colors = $data['colors'];
      unset($data['tags'], $data['colors']);

      $product->update($data);

      $product->colors()->sync($colors);
      $product->tags()->sync($tags);

      DB::commit();
    } catch (\Exception $ex) {
      DB::rollBack();

      foreach ($paths as $path) {
        Storage::disk('public')->delete($path);
      }

      dd($ex);
    }
  }

  public function uploadImages(array $imgs, $product_id)
  {
    $paths = [];

    foreach ($imgs as $key => $img) {
      $data['path'] = Storage::disk('public')->put('/images', $img);
      $data['url'] = url('storage/' . $data['path']);
      $data['product_id'] = $product_id;
      $paths[] = $data['path'];

      ProductImg::create($data);
    }

    return $paths;
  }
}