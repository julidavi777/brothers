<?php 
 
namespace App\Http\Controllers; 
use App\Models\Empleado; 
use App\Models\User;  
 
use Illuminate\Http\Request; 
 
class EmpleadoController extends Controller 
{ 
    public function index(){ 
        $empleados = Empleado::all(); 
        return view('empleados.index', compact('empleados')); 
 
    } 
    public function create() 
    { 
        return view('empleados.create'); 
    } 
    public function store(Request $request) 
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
        $user = new User(); 
        $empleado->nombre = $request->input('nombre'); 
        $empleado->apellidos = $request->input('apellidos'); 
        $empleado->cedula = $request->input('cedula'); 
        $empleado->direccion = $request->input('direccion'); 
        $empleado->departamento = $request->input('departamento'); 
        $empleado->municipio = $request->input('municipio'); 
        $empleado->barrio = $request->input('barrio'); 
        $empleado->tipo_empleado = $request->input('tipo_empleado'); 
        $empleado->salario = $request->input('salario'); 
        $user->usuario = $request->input('usuario'); 
        $user->contrasena = bcrypt($request->input('contrasena')); // encripta la contraseña 
 
        // Guarda el empleado en la base de datos 
        $empleado->save(); 
        $user->save();  
 
        // Redirecciona a alguna vista o acción de confirmación 
        return redirect('/empleados')->with('Empleado creado correctamente'); 
    } 
 =======
<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\User; 

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));

    }
    public function create()
    {
        return view('empleados.create');
    }
    public function store(Request $request)
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
        $user = new User();
        $empleado->nombre = $request->input('nombre');
        $empleado->apellidos = $request->input('apellidos');
        $empleado->cedula = $request->input('cedula');
        $empleado->direccion = $request->input('direccion');
        $empleado->departamento = $request->input('departamento');
        $empleado->municipio = $request->input('municipio');
        $empleado->barrio = $request->input('barrio');
        $empleado->tipo_empleado = $request->input('tipo_empleado');
        $empleado->salario = $request->input('salario');
        $user->usuario = $request->input('usuario');
        $user->contrasena = bcrypt($request->input('contrasena')); // Hashea la contraseña

        // Guarda el empleado en la base de datos
        $empleado->save();
        $user->save(); 

        // Redirecciona a alguna vista o acción de confirmación
        return redirect('/empleados')->with('');
    }

}
