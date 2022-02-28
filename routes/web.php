<?php

use TCG\Voyager\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\ShopController;

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
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

Route::get('/shop{product}', [ShopController::class, 'show'])->name('shop.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart/reset', [CartController::class, 'reset'])->name('cart.reset');
Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/{product}/save', [CartController::class, 'save'])->name('cart.save');
Route::delete('/save/{product}', [SaveController::class, 'destroy'])->name('save.destroy');
Route::post('/save/{product}/cart', [SaveController::class, 'store'])->name('save.store');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout.index');

Route::get('/checkout/succes', [HomeController::class, 'succes'])->name('checkout.succes');

Route::get('/orders', [HomeController::class, 'orders'])->name('orders');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

