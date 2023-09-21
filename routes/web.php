get<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('getHome');
Route::get('/contactUs', [HomeController::class, 'contactUs'])->name('getContactUs');
//Products
Route::post('/storeProduct', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/createProduct', [ProductController::class, 'create'])->name('createProduct');
Route::get('/products', [ProductController::class, 'index'])->name('getProducts');


