<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;  

class PedidoController extends Controller
{
    public function index(Request $request)
{
    $query = Pedido::query();

    // Aplicar filtros
    if ($request->filled('numero_orden')) {
        $query->where('numero_orden', $request->input('numero_orden'));
    }

    if ($request->filled('fecha_desde') && $request->filled('fecha_hasta')) {
        $query->whereBetween('fecha_pedido', [$request->input('fecha_desde'), $request->input('fecha_hasta')]);
    }

    if ($request->filled('empleado')) {
        $query->where('empleado_id', $request->input('empleado'));
    }

    if ($request->filled('cliente')) {
        $query->where('cliente_id', $request->input('cliente'));
    }

    // Obtener los pedidos filtrados
    $pedidos = $query->get();

    // Retorna la vista 'pedidos.index' y pasa los pedidos como datos
    return view('pedidos.index', compact('pedidos'));
}
}
