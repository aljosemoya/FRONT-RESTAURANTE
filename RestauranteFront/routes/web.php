<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProducIngrController;
use App\Http\Controllers\NavegaciónController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\FacturaController;
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
    return view('index');
})->name('homeRestaurante');

//RUTAS DE NAVEGACIÓN
Route::get('/administrarRestaurante', [NavegaciónController::class, 'obtenerEditorAdministracion'])->name('administrarRestaurante');
Route::get('/crearPlatillo', [NavegaciónController::class, 'obtenerEditorNuevoPlatillo'])->name('EditorNuevoPlatillo');
Route::get('/facturaa', [NavegaciónController::class, 'GenerarNuevaFactura'])->name('GenerarNuevaFactura');

// RUTAS DE PRODUCTO
Route::post('/crear', [ProductoController::class, 'crearPlatillo'])->name('crearPlatillo');
Route::get('/buscar/{id}', [ProductoController::class, 'buscarPlatillo']);
Route::middleware(['web'])->group(function () {
    Route::delete('/eliminar/{id}', [ProductoController::class, 'eliminarPlatillo'])->name('eliminarPlatillo');
});
Route::get('/todos', [ProductoController::class, 'obtenerTodos']);


//RUTAS PRODUCTO INGREDIENTE
Route::get('/obtener-ingredientes-platillo', [ProducIngrController::class, 'obtenerIngredientesPlatillo']);
Route::get('/ver-platillos', [ProducIngrController::class, 'verPlatillos'])->name('verPlatillos');
Route::get('/listaPlatillos', [ProducIngrController::class, 'verPlatillosEliminar'])->name('eliminarPlatillos');
Route::get('/menuRestaurante', [ProducIngrController::class, 'verPlatillosMenu'])->name('menuRestaurante');

//RUTAS RELACIONADAS A INGREDIENTE
Route::post('/api/restaurante/ingrediente/guardar', [IngredienteController::class, 'creaIngrediente']);
Route::get('/api/restaurante/ingrediente/buscar', [IngredienteController::class, 'buscarIngrediente']);
Route::put('/api/restaurante/ingrediente/actualizar', [IngredienteController::class, 'actualizaIngrediente']);
Route::delete('/api/restaurante/ingrediente/eliminar', [IngredienteController::class, 'eliminarIngrediente']);

//RUTAS DE ORDEN
Route::post('/orden/guardar', [OrdenController::class, 'generarOrden'])->name('generarOrden');

//RUTAS DE FACTURA
Route::post('/factura', [FacturaController::class, 'generarFactura'])->name('generarFactura');




