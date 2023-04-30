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
    return $data['products'];
  }
}