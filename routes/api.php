<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::prefix('products')->namespace('App\\Http\\Controllers\\API\\v1\\Product')->group(function () {
  Route::get('/', 'IndexController');
});

Route::prefix('tags')->namespace('App\\Http\\Controllers\\API\\v1\\Tag')->group(function () {
  Route::get('/', 'IndexController');
});

Route::prefix('categories')->namespace('App\\Http\\Controllers\\API\\v1\\Category')->group(function () {
  Route::get('/', 'IndexController');
});

Route::prefix('colors')->namespace('App\\Http\\Controllers\\API\\v1\\Color')->group(function () {
  Route::get('/', 'IndexController');
});

Route::prefix('carts')->namespace('App\\Http\\Controllers\\API\\v1\\Cart')->group(function () {
  Route::post('/', 'StoreController');
});