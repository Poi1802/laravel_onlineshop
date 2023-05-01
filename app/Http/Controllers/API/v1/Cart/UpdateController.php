<?php

namespace App\Http\Controllers\API\v1\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\UpdateRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
  public function __invoke(Cart $cart, UpdateRequest $request)
  {
    $data = $request->validated();
    $cart->update($data);

    return json_encode([
      'status' => true,
      'cart_id' => $cart->id
    ]);
  }
}