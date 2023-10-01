<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/pedidos', 'PedidoController@index')->name('pedidos.index');

Route::get('/crear-empleado', 'EmpleadoController@crearEmpleado')->name('crear_empleado');

Route::get('/empleados', function () {
    return view('empleados.index');
});

Route::get('/', function () {
    return view('welcome');
});
