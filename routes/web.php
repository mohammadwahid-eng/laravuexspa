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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/account', function () {
    return view('shop.account');
})->middleware(['auth'])->name('account');

Route::get('/shop', function () {
    return view('shop.shop');
})->name('shop');

Route::get('/wishlist', function () {
    return view('shop.wishlist');
})->name('wishlist');

Route::get('/compare', function () {
    return view('shop.compare');
})->name('compare');

Route::get('/cart', function () {
    return view('shop.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('shop.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';