<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function () {
  Route::get('/', IndexController::class)->name('main.index');

  Route::prefix('category')->namespace('App\\Http\\Controllers\\Category')->group(function () {
    Route::get('/', 'IndexController')->name('category.index');
    // Route::get('/create', 'CreateController')->name('category.create');
    // Route::post('/', 'StoreController')->name('category.store');
    // Route::get('/{category}/edit', 'EditController')->name('category.edit');
    // Route::patch('/', 'UpdateController')->name('category.update');
    // Route::delete('/{category}', 'DeleteController')->name('category.delete');
  });
});