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

  Route::prefix('category')->name('category.')->namespace('App\\Http\\Controllers\\Category')->group(function () {
    Route::get('/', 'IndexController')->name('index');
    Route::get('/create', 'CreateController')->name('create');
    Route::post('/', 'StoreController')->name('store');
    Route::get('/{category}/edit', 'EditController')->name('edit');
    Route::patch('/{category}', 'UpdateController')->name('update');
    Route::delete('/{category}', 'DeleteController')->name('delete');
  });

  Route::prefix('tag')->name('tag.')->namespace('App\\Http\\Controllers\\Tag')->group(function () {
    Route::get('/', 'IndexController')->name('index');
    Route::get('/create', 'CreateController')->name('create');
    Route::post('/', 'StoreController')->name('store');
    Route::get('/{tag}/edit', 'EditController')->name('edit');
    Route::patch('/{tag}', 'UpdateController')->name('update');
    Route::delete('/{tag}', 'DeleteController')->name('delete');
  });

  Route::prefix('color')->name('color.')->namespace('App\\Http\\Controllers\\Color')->group(function () {
    Route::get('/', 'IndexController')->name('index');
    Route::get('/create', 'CreateController')->name('create');
    Route::post('/', 'StoreController')->name('store');
    Route::get('/{color}/edit', 'EditController')->name('edit');
    Route::patch('/{color}', 'UpdateController')->name('update');
    Route::delete('/{color}', 'DeleteController')->name('delete');
  });

  Route::prefix('user')->name('user.')->namespace('App\\Http\\Controllers\\User')->group(function () {
    Route::get('/', 'IndexController')->name('index');
    Route::get('/create', 'CreateController')->name('create');
    Route::post('/', 'StoreController')->name('store');
    Route::get('/{user}/edit', 'EditController')->name('edit');
    Route::patch('/{user}', 'UpdateController')->name('update');
    Route::delete('/{user}', 'DeleteController')->name('delete');
  });
});