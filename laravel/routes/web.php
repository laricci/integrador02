<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ClientController;

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


// Firebase Basic Routes
Route::prefix('/firebase')->group(function(){

    Route::post('/add'      , [TestController::class, 'add']);
    Route::post('/list'     , [TestController::class, 'list']);
    Route::post('/edit'     , [TestController::class, 'edit']);
    Route::post('/delete'   , [TestController::class, 'delete']);

    Route::get('/add'      , [TestController::class, 'add']);
    Route::get('/list'     , [TestController::class, 'list']);
    Route::get('/edit'     , [TestController::class, 'edit']);
    Route::get('/delete'   , [TestController::class, 'delete']);

    // Exemplo de inserção de dados no Firebase
    Route::get('example'    , [TestController::class, 'example']);
});

// Firebase Basic Routes
Route::get('/cliente' , function () {
    return view('cliente');
});

Route::prefix('/cliente')->group( function(){
    Route::get('/list'     , [ClientController::class, 'list'])->name('cliente.list');;
});

// Teste post de form com VUE
Route::post('/submit'   , [ContactFormController::class, 'submit']);
Route::get('/clienttest'   , [ClientController::class, 'tests']);
