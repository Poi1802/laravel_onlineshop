<?php

namespace App\Http\Controllers\API\v1\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke()
  {
    return CategoryResource::collection(Category::all());
  }
}