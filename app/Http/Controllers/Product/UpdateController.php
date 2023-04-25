<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
  public function __invoke(UpdateRequest $request, Product $product)
  {
    $data = $request->validated();

    $this->service->update($data, $product);

    return to_route('product.index');
  }
}