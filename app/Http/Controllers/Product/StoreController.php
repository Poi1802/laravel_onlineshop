<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
  public function __invoke(StoreRequest $request)
  {
    $data = $request->validated();

    $this->service->store($data);

    return to_route('product.index');
  }
}