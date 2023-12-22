<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PubblicController;

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

Route::get('/',[PubblicController::class,'homepage'])->name('homepage');

Route::get('/contactUs/work',[PubblicController::class,'contactUs'])->name('contactUs');

Route::get('/products/index',[ProductController::class,'index'])->name('products.index');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

Route::get('/products/edit/{product}',[ProductController::class,'edit'])->name('products.edit');

Route::put('/products/update/{product}',[ProductController::class,'update'])->name('products.update');

Route::get('/categoria/{category}',[PubblicController::class,'categoryShow'])->name('categoryShow');

Route::get('/products/show/{product}',[ProductController::class,'show'])->name('products.show');

Route::get('/ricerca/film',[PubblicController::class,'searchProducts'])->name('products.search');
