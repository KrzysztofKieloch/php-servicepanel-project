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

Route::get('/repairs', [App\Http\Controllers\RepairController::class, 'index'])->name('repairs.index')->middleware('auth');
Route::get('/repairs/create', [App\Http\Controllers\RepairController::class, 'create'])->name('repairs.create')->middleware('auth');
Route::get('/repairs/{repair}', [App\Http\Controllers\RepairController::class, 'show'])->name('repairs.show')->middleware('auth');
Route::post('/repairs', [App\Http\Controllers\RepairController::class, 'store'])->name('repairs.store')->middleware('auth');
Route::get('/repairs/edit/{repair}', [App\Http\Controllers\RepairController::class, 'edit'])->name('repairs.edit')->middleware('auth');
Route::post('/repairs/{repair}', [App\Http\Controllers\RepairController::class, 'update'])->name('repairs.update')->middleware('auth');
Route::delete('/repairs/{repair}', [App\Http\Controllers\RepairController::class, 'destroy'])->name('repairs.destroy')->middleware('auth');


Route::get('/prices', [App\Http\Controllers\PriceController::class, 'index'])->name('prices.index')->middleware('auth');
Route::get('/prices/create', [App\Http\Controllers\PriceController::class, 'create'])->name('prices.create')->middleware('auth');
Route::get('/prices/{price}', [App\Http\Controllers\PriceController::class, 'show'])->name('prices.show')->middleware('auth');
Route::post('/prices', [App\Http\Controllers\PriceController::class, 'store'])->name('prices.store')->middleware('auth');
Route::get('/prices/edit/{price}', [App\Http\Controllers\PriceController::class, 'edit'])->name('prices.edit')->middleware('auth');
Route::post('/prices/{price}', [App\Http\Controllers\PriceController::class, 'update'])->name('prices.update')->middleware('auth');
Route::delete('/prices/{price}', [App\Http\Controllers\PriceController::class, 'destroy'])->name('prices.destroy')->middleware('auth');

Route::get('/pricelist', [App\Http\Controllers\PriceListController::class, 'index'])->name('prices.pricelist')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
