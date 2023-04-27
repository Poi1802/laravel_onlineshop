<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Service\Post\Service;

class BaseController extends Controller
{
  protected $service;

  /**
   * Class constructor.
   */
  public function __construct(Service $service)
  {
    $this->service = $service;
  }
}