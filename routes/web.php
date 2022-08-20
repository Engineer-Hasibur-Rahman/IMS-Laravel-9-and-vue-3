<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\CategoriesController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\SizeController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'),  'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
 



Route::middleware(['auth:sanctum'])->group(function () {

  // cateries all routes
Route::resource('categorices', CategoriesController::class);

 // Brand all routes
 Route::resource('brand', BrandController::class);

 // Size all routes
 Route::resource('sizes', SizeController::class);

});