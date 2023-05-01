<?php

namespace App\Http\Controllers\API\v1\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
  public function __invoke($userId)
  {
    $cart = Cart::where('user_id', $userId)->first();

    $products = [];
    foreach (json_decode($cart->product_ids) as $id) {
      $products[] = Product::find($id);
    }

    $res = [
      'cart_id' => $cart->id,
      'products' => ProductResource::collection($products)
    ];

    return $res;
  }
}