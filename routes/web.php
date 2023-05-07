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


// create - store category
Route::get('/category/create', [MainController::class, 'categoryCreate'])
    ->name('category.create');

Route::post('/category/store', [MainController::class, 'categoryStore'])
    ->name('category.store');


// delete category
Route::get('/category/delete/{category}', [MainController::class, 'categoryDelete'])
    ->name('category.delete');


// create - store product
Route::get('/product/create/{id}', [MainController::class, 'productCreate'])
    ->name('product.create');

Route::post('/product/store', [MainController::class, 'productStore'])
    ->name('product.store');


// delete product
Route::get('/product/delete/{product}', [MainController::class, 'productDelete'])
    ->name('product.delete');


// edit category
Route::get('/category/edit/{category}', [MainController::class, 'categoryEdit'])
    ->name('category.edit');


// update category
Route::post('/category/update/{category}', [MainController::class, 'categoryUpdate'])
    ->name('category.update');

// edit product
Route::get('/product/edit/{product}', [MainController::class, 'productEdit'])
    ->name('product.edit');


// update product
Route::post('/product/update/{product}', [MainController::class, 'productUpdate'])
    ->name('product.update');
