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

// homepage
Route::get('/',[PubblicController::class,'homepage'])->name('homepage');

// contattaci
Route::get('/contactUs/work',[PubblicController::class,'contactUs'])->name('contactUs');


// richiesta per inviare la email
Route::post('/contattaci/submit',[PubblicController::class,'submit'])->name('submit');

// rotta per le categorie
Route::get('/categoria/{category}',[PubblicController::class,'categoryShow'])->name('categoryShow');

// rotta per il search
Route::get('/ricerca/film',[PubblicController::class,'searchProducts'])->name('products.search');

// rotta form per la compilazione dei film
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

// rotta di tutti i film
Route::get('/products/index',[ProductController::class,'index'])->name('products.index');

// rotta per creare il film
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

// rotta del dettaglio di ogni film
Route::get('/products/show/{product}',[ProductController::class,'show'])->name('products.show');

// rotta per modificare un film
Route::get('/products/edit/{product}',[ProductController::class,'edit'])->name('products.edit');

// rotta per modificare nel concreto un film
Route::put('/products/update/{product}',[ProductController::class,'update'])->name('products.update');

// rotta per il delete di un film
Route::delete('/elimina/film/{product}',[ProductController::class,'destroy'])->name('products.delete');

Route::post('/lingua/{lang}',[PubblicController::class,'setLanguage'])->name('set_language_locale');









