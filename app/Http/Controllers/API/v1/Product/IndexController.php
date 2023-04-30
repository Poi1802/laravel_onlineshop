<?php

namespace App\Http\Controllers\API\v1\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke()
  {
    return ProductResource::collection(Product::all());
  }
}