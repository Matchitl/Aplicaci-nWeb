<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/panel', function () {
    return view('welcome');
})->name('indexOne');
*/

Route::get('/', function(){
    return view('index');
})->name('index');

/* Route::get('/clients', function(){
    echo 'Pagina de Clientes';
})->name('clients');

Route::get('/sales', function(){
    echo 'Pagina de Ventas';
})->name('sales'); */

Route::resource('/products', ProductController::class);
Route::resource('/clients', ClientController::class);
Route::resource('/sales', SaleController::class);

