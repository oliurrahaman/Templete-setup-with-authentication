<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
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

Route::prefix('admin/')->group(function(){
    Route::get('login', [LoginController::class, 'loginPage'])->name('admin.loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::middleware(['auth'])->group(function(){
  Route::get('dashboard',[dashboardController::class, 'dashboard'])->name('admin.dashboard');
  Route::resource('product', ProductController::class);
  Route::resource('unit',UnitController::class);
  Route::resource('category',CatController::class);
});
});



