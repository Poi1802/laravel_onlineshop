<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteImgController extends Controller
{
  public function __invoke(ProductImg $productImg)
  {
    Storage::disk('public')->delete($productImg->path);
    $productImg->delete();

    return back();
  }
}