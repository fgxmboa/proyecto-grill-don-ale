<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MenuController;
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

Route::get('clientes', [ClienteController::class, 'index']) ->name('cliente.index');
Route::get('pedido', [PedidoController::class, 'index']) ->name('pedido.index');
Route::get('menu', [MenuController::class, 'index']) ->name('menu.index');

