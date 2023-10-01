<?php

namespace App\Http\Controllers;
use App\Models\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleado = Empleado::all();
        return view('empleados.index', compact('empleado'));

    }
    public function crearEmpleado()
    {
        return view('crear');
    }
    public function guardarEmpleado(Request $request)
    {
        // Validación de datos del formulario (puedes personalizar esto según tus necesidades)
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellidos' => 'required|string|max:50',
            'cedula' => 'required|string|max:50',
            'direccion' => 'nullable|string|max:255',
            'departamento' => 'required|integer',
            'municipio' => 'required|integer',
            'barrio' => 'nullable|string|max:255',
            'tipo_empleado' => 'required|integer',
            'salario' => 'required|numeric|between:0,99999999.99',
            'usuario' => 'required|string|max:255',
            'contrasena' => 'required|string|min:6', // Ajusta el mínimo según tus requerimientos
        ]);

        // Crea un nuevo objeto Empleado y asigna los valores del formulario
        $empleado = new Empleado();
        $empleado->nombre = $request->input('nombre');
        $empleado->apellidos = $request->input('apellidos');
        $empleado->cedula = $request->input('cedula');
        $empleado->direccion = $request->input('direccion');
        $empleado->departamento = $request->input('departamento');
        $empleado->municipio = $request->input('municipio');
        $empleado->barrio = $request->input('barrio');
        $empleado->tipo_empleado = $request->input('tipo_empleado');
        $empleado->salario = $request->input('salario');
        $empleado->usuario = $request->input('usuario');
        $empleado->contrasena = bcrypt($request->input('contrasena')); // Hashea la contraseña

        // Guarda el empleado en la base de datos
        $empleado->save();

        // Redirecciona a alguna vista o acción de confirmación
        return redirect()->route('nombre_de_la_ruta_para_vista_de_confirmacion');
    }
}
