<?php

use Illuminate\Support\Facades\Route;

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




use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');;


Route::get('/product/create', [MainController::class, 'productCreate'])
    ->name('product.create');

Route::post('/product/store', [MainController::class, 'productStore'])
    ->name('product.store');

Route::get('/category/create', [MainController::class, 'categoryCreate'])
    ->name('category.create');

Route::post('/category/store', [MainController::class, 'categoryStore'])
    ->name('category.store');
