<?php

namespace App\Http\Controllers\API\v1\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class StoreController extends Controller
{
  public function __invoke(StoreRequest $request)
  {
    $data = $request->validated();
    $cart = Cart::create($data);
    return $cart ? json_encode([
      'status' => true,
      'cart_id' => $cart->id
    ]) : json_encode([
        'status' => false,
      ]);
  }
}