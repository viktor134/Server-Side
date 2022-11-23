<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\DashboardController;


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

Route::get('/admin',[DashboardController::class,'index']);
Route::get('/admin/product',[ProductController::class],'index');




