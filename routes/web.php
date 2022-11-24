<?php

use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Backend\ProductController;
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
Route::prefix('')->group(function(){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/shop', [HomeController::class, 'shopPage'])->name('shop.page');
    Route::get('/single-product/{product_slug}', [HomeController::class, 'productDetails'])->name('productdetail.page');
});

Route::prefix('backend/')->group(function(){
    Route::get('login', [LoginController::class, 'loginPage'])->name('backend.loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('backend.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('backend.logout');
    Route::middleware(['auth'])->group(function(){
  Route::get('dashboard',[dashboardController::class, 'dashboard'])->name('backend.dashboard');

  Route::resource('category',categoryController::class);
  Route::resource('testimonial',TestimonialController::class);
  Route::resource('products',ProductController::class);
});
});



