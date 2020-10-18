<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('product', App\Http\Controllers\ProductController::class);
Route::resource('account', App\Http\Controllers\AccountController::class);
Route::resource('purchase', App\Http\Controllers\PurchaseController::class);
Route::resource('accept', App\Http\Controllers\AcceptController::class);
Route::resource('newmonth', App\Http\Controllers\MonthController::class);
Route::get('/search', [App\Http\Controllers\PurchaseController::class, 'search'])->name('search');
Route::get('/searches', [App\Http\Controllers\AcceptController::class, 'searches'])->name('searches');
Route::get('/searchmonth', [App\Http\Controllers\MonthController::class, 'searchmonth'])->name('searchmonth');
Route::resource('inventory', App\Http\Controllers\InventoryController::class);


