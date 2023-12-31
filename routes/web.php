<?php

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
//To Update
Route::post('/updateProduct/{id}', [ProductController::class, 'update'])->name('updateProduct');
Route::get('/updateProduct/{id}', [ProductController::class, 'edit'])->name('editProduct');
//To Show
Route::get('/products/{id}', [ProductController::class, 'show'])->name('showProduct');
//To Create
Route::get('/createProduct', [ProductController::class, 'create'])->name('createProduct');
Route::get('/products', [ProductController::class, 'index'])->name('getProducts');
//To Delete
Route::get('/products/{id}/delete', [ProductController::class, 'delete'])->name('deleteProduct');


