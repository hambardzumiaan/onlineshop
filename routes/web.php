<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoryController;

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

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/show/{id}', [ProductController::class, 'show']);
Route::post('/products/show/{id}', [ProductController::class, 'show']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/create', [ProductController::class, 'store']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/edit/{id}', [ProductController::class, 'update']);
Route::post('/products/destroy/{id}', [ProductController::class, 'destroy']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'update']);


// Route::get('/carts', [CartController::class, 'A']);	
Route::post('/carts/create/{id}', [CartController::class, 'addToCart']);	
Route::get('/carts', [CartController::class, 'index']);	
Route::post('/carts/destroy/{id}', [CartController::class, 'destroy']);


Route::post('/histories', [HistoryController::class, 'index']);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


