<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller; //Apply Mycontrooler

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

Route::get('/', [Mycontroller::class,'Index']);

Route::get('/contacts', [Mycontroller::class,'contacts']);

Route::get('/checkout', [Mycontroller::class,'checkout']);

Route::get('/404', [Mycontroller::class,'404']);

Route::get('/about', [Mycontroller::class,'about']);

Route::get('/shopping_cart', [Mycontroller::class,'shopping_cart']);

Route::get('/product', [Mycontroller::class,'product']);

Route::get('/login', [Mycontroller::class,'login']);

Route::get('/pricing', [Mycontroller::class,'pricing']);

Route::get('/product_type', [Mycontroller::class,'product_type']);

Route::get('/signup', [Mycontroller::class,'signup']);

