<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemSizeController;
use App\Http\Controllers\ItemTransectionLogsController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\StoreReuqestController;
use App\Models\Item;
use App\Models\Store;
use App\Models\StoreReuqest;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('home');



Route::get('/store', function(){
    return view('store.index');
})->name('store');


Route::get('/store/{id}', function($id){

  $store = Store::with('items')->find($id);
  $itemCollection = $store->items;

   return collect($itemCollection)->simplePaginate(5);
    // return view('store.show',['items' => $result]);



});



Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/items', ItemController::class);
Route::resource('/itemSize', ItemSizeController::class)->middleware('auth');

// Route::resource('/itemTransectionLogs', ItemTransectionLogsController::class);
// Route::get('/qtyByItemSize', ItemTransectionLogsController)

Route::controller(ItemTransectionLogsController::class)->group(function () {
    Route::get('/qty/{id}/{size}', 'searchByItemIDSize');
    // Route::post('/orders', 'store');
});

Route::resource('/admin/sizes', SizeController::class)->middleware('auth');

Route::resource('storeRequest', StoreReuqestController::class)->middleware('auth');

Route::get('/reports/uniforms', function(){
    $result = Item::with(['itemSize' => function($query){
                                return $query->with('size')->get();
                            }])
                        ->get();



    return view('reports.uniform', ['items' => $result]);
})->middleware('auth');

Route::get('/print/storeRequest/{id}', function($id){

    $result = StoreReuqest::with(['storeRequestItems'=> function($query){
        return $query->with(['itemSize' => function($query){
            return $query->with(['item', 'size']);
        }]);
    }])->findOrFail($id);

    return view('store_request.report',['store_request' => $result]);
})->name('printStoreRequest')->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('ath');
