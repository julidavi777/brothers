<?php

use App\Http\Controllers\DepartamentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/pedidos', [PedidoController::class, 'index'])->name ('pedidos.index');
// Route::get('/empleado', [EmpleadoControllerController::class, 'index'])->name ('empleado.index');

Route::resource('/empleados', EmpleadoController::class); 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gerente', function () {
    return view('roles.entregador');
}); 
Route::get('/departamentos',[DepartamentoController::class, 'index']);
Route::get('/departamentos/{id}',[DepartamentoController::class, 'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
