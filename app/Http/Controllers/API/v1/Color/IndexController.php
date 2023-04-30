<?php

namespace App\Http\Controllers\API\v1\Color;

use App\Http\Controllers\Controller;
use App\Http\Resources\ColorResource;
use App\Models\Color;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke()
  {
    return ColorResource::collection(Color::all());
  }
}