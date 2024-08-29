<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    })->name('home.index');
    
    

    Route::get('/signup', function(){
        return view('home.signup');
    })->name('signup');
    
Route::post('/signup', [SignupController::class,'signupPost'])->name('signup.post');



Route::get('/signin', function(){
    return view('home.signin');
})->name('signin');
Route::post('/signin', [SigninController::class,'signinPost'])->name('signin.post');

Route::get('/logout', [SignupController::class, 'logout'])->name('logout');


Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// code for shopping cart


Route::get('/product-list', [ProductController::class, 'index'])->name('product.list')->middleware('auth');
  
Route::get('/cart-list', [ProductController::class, 'productCart'])->name('cart.list')->middleware('auth');
Route::post('add-to-cart', [ProductController::class, 'addproductToCart'])->name('add-product-to-shopping-cart')->middleware('auth');
Route::delete('/delete-cart-item', [ProductController::class, 'deleteItem'])->name('delete.cart.item')->middleware('auth');
Route::post('/cart/update', [ProductController::class, 'updateQuantity'])->name('cart.update')->middleware('auth');





Route::post('/session', [StripeController::class, 'session'])->name('session');

Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');


Route::middleware('auth')->group(function () {
    Route::post('/product-list', [ProductController::class, 'index'])->name('product.list');
});

