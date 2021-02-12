<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\front\MainController;
use App\Http\Controllers\front\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');
Route::get('/product',[ProductController::class,'index'])->name('product');


Route::view('/product/{slug}','front.product-detail')->name('product_detail');
Route::view('/cart','front.cart')->name('cart');
Route::view('/login','front.auth.login')->name('login');
Route::match(['post', 'get'], '/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::view('/contact','front.contact')->name('contact');
Route::view('/about','front.about')->name('about');
