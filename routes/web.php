<?php

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('test/{firstname}/{name}', [HomeController::class, 'Login'])->name('Login');
Route::get('/products', [ProductsController::class, 'Products'])->name('Products');
Route::get('/products/{productdetail:name}', [ProductsController::class, 'Show'])
->where('id', '\d+') 
->name('ProductDetail');
Route::get('/account', [AccountsController::class, 'Account'])->name('Account');
Route::get('/product/insert', [ProductsController::class, 'Insert'])->name('Insert');
Route::post('/product/store', [ProductsController::class, 'Store'])->name('Store');



