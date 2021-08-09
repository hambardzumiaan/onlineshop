<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/products/create', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::post('/products/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


