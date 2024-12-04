<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::view('/','login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/home',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'details']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cartitem',[ProductController::class,'cartItem']);
Route::post('deleteCartItem',[ProductController::class,'deleteCartItem'])->name('deleteCartItem');
Route::get('/logout', function () {
    Session::flush();
    return redirect('/');
})->name('logout');
Route::get('/cartDetail', [ProductController::class, 'cartItem'])->name('cartDetail');
Route::get('/order/{id}',[ProductController::class, 'order']);
Route::get('/userDetail',[UserController::class,'showUser']);
Route::view('AboutUs','AboutUs');
Route::view('Support','Support');
Route::view('UserRegistration','UserRegistration');
Route::post('UserRegistration',[UserController::class,'userRegistration']);
Route::get('/search', [ProductController::class, 'Search'])->name('search');





