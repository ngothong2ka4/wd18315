<?php

use App\Http\Controllers\GioiThieuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\UserController;
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

Route::get('list-products', [ProductController::class,'index']);
Route::get('thongtinsv', [GioiThieuController::class,'index']);

Route::get('queryBuilder', [QueryBuilderController::class,'queryBuilder']);

Route::group(['prefix' => 'users'], function() {

    Route::resource('user', UserController::class);
});

Route::group(['prefix' => 'products'], function() {

    Route::resource('product', ProductController::class);
    Route::get('search', [ProductController::class,'search'])->name('product.search');
});

