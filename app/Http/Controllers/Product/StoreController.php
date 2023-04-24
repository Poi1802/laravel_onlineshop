<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
  public function __invoke(StoreRequest $request)
  {
    $data = $request->validated();

    if (!isset($data['published']))
      $data['published'] = 0;

    dd($data);
    Product::firstOrCreate($data);

    return to_route('product.index');
  }
}