<?php

namespace App\Http\Controllers\API\v1\Tag;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke()
  {
    return TagResource::collection(Tag::all());
  }
}