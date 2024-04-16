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
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::group(['prefix'=>'products'],function()
{
    Route::get('/category/{id}', [App\Http\Controllers\Products\ProductsController::class, 'singleCategory'])->name('single.category');
    Route::get('/single-product/{id}', [App\Http\Controllers\Products\ProductsController::class, 'singleProduct'])->name('single.Product');
    Route::get('/shop', [App\Http\Controllers\Products\ProductsController::class, 'shop'])->name('products.shop');
    Route::post('/add-cart', [App\Http\Controllers\Products\ProductsController::class, 'addToCart'])->name('products.add.cart');
    Route::get('/cart', [App\Http\Controllers\Products\ProductsController::class, 'Cart'])->name('products.cart')->middleware('auth:web');
    Route::get('/cart/{id}', [App\Http\Controllers\Products\ProductsController::class, 'deleteFromCart'])->name('products.cart.delete');
    
    //checkout and paying
    Route::post('/prepare-checkout', [App\Http\Controllers\Products\ProductsController::class, 'prepareCheckout'])->name('products.prepare.checkout');
    Route::get('/checkout', [App\Http\Controllers\Products\ProductsController::class, 'Checkout'])->name('products.checkout');
    Route::post('/checkout', [App\Http\Controllers\Products\ProductsController::class, 'proccessCheckout'])->name('products.proccess.checkout')->middleware('check.for.price');
    Route::get('/pay', [App\Http\Controllers\Products\ProductsController::class, 'paywithPaypal'])->name('products.pay')->middleware('check.for.price');
    Route::get('/success', [App\Http\Controllers\Products\ProductsController::class, 'success'])->name('products.success')->middleware('check.for.price');
});

Route::group(['prefix'=>'users'],function()
{
//users pages
Route::get('/my-orders', [App\Http\Controllers\Users\UsersController::class, 'myOrders'])->name('users.orders')->middleware('auth:web');
Route::get('/settings', [App\Http\Controllers\Users\UsersController::class, 'settings'])->name('users.settings')->middleware('auth:web');
Route::post('/settings/{id}', [App\Http\Controllers\Users\UsersController::class, 'updateUserSettings'])->name('users.settings.update')->middleware('auth:web');
});
//admin panel
Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewLogin'])->name('admins.login')->middleware('check.for.auth');
Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'checkLogin'])->name('check.login');
Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function()
{
Route::get('/index', [App\Http\Controllers\Admins\AdminsController::class, 'index'])->name('admins.dashboard');
Route::get('/all', [App\Http\Controllers\Admins\AdminsController::class, 'displayAdmins'])->name('admins.all');
Route::get('/create', [App\Http\Controllers\Admins\AdminsController::class, 'createAdmins'])->name('admins.create');
Route::post('/create', [App\Http\Controllers\Admins\AdminsController::class, 'storeAdmins'])->name('admins.store');
});
//categories
Route::group(['prefix'=>'categorie'],function()
{
Route::get('/all', [App\Http\Controllers\Admins\AdminsController::class, 'displayCategorie'])->name('categories.all');
Route::get('/create', [App\Http\Controllers\Admins\AdminsController::class, 'createCategorie'])->name('categories.create');
Route::post('/create', [App\Http\Controllers\Admins\AdminsController::class, 'storeCategorie'])->name('categories.store');
Route::get('/update/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'updateCategorie'])->name('categories.update');
Route::post('/edit/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'editCategorie'])->name('categories.edit');
Route::get('/delete/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteCategorie'])->name('categories.delete');

});
//products
Route::group(['prefix'=>'products'],function()
{
Route::get('/all', [App\Http\Controllers\Admins\AdminsController::class, 'displayProduct'])->name('admins.allProduct');
Route::get('/create', [App\Http\Controllers\Admins\AdminsController::class, 'createPoduct'])->name('admins.createProduct');
Route::post('/create', [App\Http\Controllers\Admins\AdminsController::class, 'storePoduct'])->name('admins.storePoduct');
Route::get('/delete/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteProduct'])->name('products.delete');

});
//orders
Route::group(['prefix'=>'orders'],function()
{
    Route::get('/all', [App\Http\Controllers\Admins\AdminsController::class, 'displayOrder'])->name('orders.all');
    Route::get('/update/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'updateOrder'])->name('orders.update');

});