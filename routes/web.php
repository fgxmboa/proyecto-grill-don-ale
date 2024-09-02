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

// Index: Ruta que muestra la lista de clientes. Accede al método 'index' en ClienteController
// Create: Ruta que muestra el formulario para crear un nuevo cliente. Accede al método 'create' en ClienteController..
// Show: Ruta que muestra los detalles de un cliente específico. El parámetro '{cliente}' debe ser solo letras. Accede al método 'show' en ClienteController.
 // Store: Ruta que maneja la solicitud POST para almacenar un nuevo cliente. Accede al método 'store' en ClienteController, que es invocado cuando se envía el formulario de creación de cliente.

 // Rutas para Cliente
Route::get('cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::get('cliente/{cliente}', [ClienteController::class, 'show'])->where(['cliente' => '[A-Za-z]+'])->name('cliente.show');
Route::post('cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/{cliente}', [ClienteController::class, 'show'])->where(['cliente' => '[0-9]+'])->name('cliente.show');

// Rutas para Pedido
Route::get('pedido', [PedidoController::class, 'index'])->name('pedido.index');
Route::get('pedido/create', [PedidoController::class, 'create'])->name('pedido.create');
Route::get('pedido/{pedido}', [PedidoController::class, 'show'])->where(['pedido' => '[A-Za-z]+'])->name('pedido.show');
Route::post('pedido', [PedidoController::class, 'store'])->name('pedido.store');

// Rutas para Menú
Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::get('menu/{menu}', [MenuController::class, 'show'])->where(['menu' => '[A-Za-z]+'])->name('menu.show');
Route::post('menu', [MenuController::class, 'store'])->name('menu.store');
