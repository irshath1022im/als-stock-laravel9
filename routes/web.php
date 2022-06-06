<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemSizeController;
use App\Http\Controllers\ItemTransectionLogsController;
use App\Http\Controllers\SizeController;
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
    return view('category.index');
})->name('store');



Route::get('/store', function(){
    return view('store.index');
})->name('store');


Route::resource('/category', CategoryController::class);
Route::resource('/items', ItemController::class);
Route::resource('/itemSize', ItemSizeController::class);

// Route::resource('/itemTransectionLogs', ItemTransectionLogsController::class);
// Route::get('/qtyByItemSize', ItemTransectionLogsController)

Route::controller(ItemTransectionLogsController::class)->group(function () {
    Route::get('/qty/{id}/{size}', 'searchByItemIDSize');
    // Route::post('/orders', 'store');
});

Route::resource('/admin/sizes', SizeController::class);

