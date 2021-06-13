<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\main\ProductController;

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

// Route::get('/hr', function () {
//     return view('welcome');
// });

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/',[LoginController::class,'show'])->name('show');
Route::get('/products',[ProductController::class,'index'])->name('products');

// Route::get('/',function(){
//     return view('login.login');
// });
