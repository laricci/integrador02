<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SupplierController;

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

Route::get('/vuetests', function () {
    return view('vuetests');
});

// Teste post de form com VUE
Route::post('/submit'   , [ContactFormController::class, 'submit']);


// Client Routes

Route::get('/cliente' , function () {
    return view('cliente');
})->name('cliente');

Route::prefix('/cliente')->group( function(){
    Route::get('/list'          , [ClientController::class, 'list'])->name('cliente.list');
    Route::post('/add'          , [ClientController::class, 'add'])->name('cliente.add');
    Route::post('/edit/{id?}'   , [ClientController::class, 'edit'])->name('cliente.edit');
    Route::get('/view/{id?}'    , [ClientController::class, 'view'])->name('cliente.view');
    Route::get('/remove/{id?}'  , [ClientController::class, 'remove'])->name('cliente.remove');
});

// Supplier Routes

Route::get('/fornecedor' , function () {
    return view('fornecedor');
})->name('fornecedor');

Route::prefix('/fornecedor')->group( function(){
    Route::get('/list'          , [SupplierController::class, 'list'])->name('fornecedor.list');
    Route::post('/add'          , [SupplierController::class, 'add'])->name('fornecedor.add');
    Route::post('/edit/{id?}'   , [SupplierController::class, 'edit'])->name('fornecedor.edit');
    Route::get('/view/{id?}'    , [SupplierController::class, 'view'])->name('fornecedor.view');
    Route::get('/remove/{id?}'  , [SupplierController::class, 'remove'])->name('fornecedor.remove');
});