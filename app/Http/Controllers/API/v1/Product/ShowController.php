<?php

namespace App\Http\Controllers\API\v1\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
  public function __invoke(Product $product)
  {
    $recentProducts = Product::where('category_id', $product->category_id)->get();

    $data['recentProducts'] = ProductResource::collection($recentProducts);
    $data['product'] = new ProductResource($product);

    return $data;
  }
}