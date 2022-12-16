<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ProductController;

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
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/product',[ProductController::class,'index']);
    Route::get('/category',[CategoryController::class,'index']);
    Route::get('/category/edit',[CategoryController::class,'show']);
    Route::get('/category/show',[CategoryController::class,'edit']);
    Route::get('/category/delete',[CategoryController::class,'delete']);
});





