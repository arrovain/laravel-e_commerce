<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[AppController::class,'index'])->name('app.index');

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});

Route::get('/shop',[ShopController::class,'index'])->name('shop.index');

Route::get('/product/{slug}',[ShopController::class,'productDetials'])->name('shop.product.details');

Route::get('/cart',[CartController::class,'index'])->name('cart.index');

Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update’);

