<?php

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('products/category/{id}', [App\Http\Controllers\Products\ProductsController::class, 'singleCategory'])->name('single.category');
Route::get('products/single-product/{id}', [App\Http\Controllers\Products\ProductsController::class, 'singleProduct'])->name('single.Product');
Route::get('products/shop', [App\Http\Controllers\Products\ProductsController::class, 'shop'])->name('products.shop');
Route::post('products/add-cart', [App\Http\Controllers\Products\ProductsController::class, 'addToCart'])->name('products.add.cart');
Route::get('products/cart', [App\Http\Controllers\Products\ProductsController::class, 'Cart'])->name('products.cart');
Route::get('products/cart/{id}', [App\Http\Controllers\Products\ProductsController::class, 'deleteFromCart'])->name('products.cart.delete');

//checkout and paying
Route::post('products/prepare-checkout', [App\Http\Controllers\Products\ProductsController::class, 'prepareCheckout'])->name('products.prepare.checkout');
Route::get('products/checkout', [App\Http\Controllers\Products\ProductsController::class, 'Checkout'])->name('products.checkout');
Route::post('products/checkout', [App\Http\Controllers\Products\ProductsController::class, 'proccessCheckout'])->name('products.proccess.checkout');
Route::get('products/pay', [App\Http\Controllers\Products\ProductsController::class, 'paywithPaypal'])->name('products.pay');
Route::get('products/pay', [App\Http\Controllers\Products\ProductsController::class, 'paywithPaypal'])->name('products.pay');
check.for.price
