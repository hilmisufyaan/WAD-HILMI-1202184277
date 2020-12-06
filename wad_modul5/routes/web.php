<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;

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

Route::get('/', function () {
    return view('home');
});

// Dibawah ini adalah rute (url) yang berhubungan dengan product
Route::resource('/product', ProductsController::class);

/* 
Daftar route resource dari controller product 
Route::resource('/product', ProductsController::class) sama dengan dibawah ini :
Aksi form   URL                     method Controller yang menghandle  
GET 	    /product 	            index 	    product.index
GET 	    /product/create 	    create 	    product.create
POST 	    /product 	            store 	    product.store
GET 	    /product/{id} 	        show 	    product.show
GET 	    /product/{id}/edit 	    edit 	    product.edit
PUT/PATCH 	/product/{id} 	        update 	    product.update
DELETE 	    /product/{id} 	        destroy 	product.destroy
*/

Route::resource('/order', OrderController::class);
Route::get('/history', [HistoryController::class, 'index'])->name('history.index');