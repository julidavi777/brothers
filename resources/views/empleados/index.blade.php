@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Empleados</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Cédula</th>
                    <th>Dirección</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Barrio</th>
                    <th>Tipo de Empleado</th>
                    <th>Salario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellidos }}</td>
                        <td>{{ $empleado->cedula }}</td>
                        <td>{{ $empleado->direccion }}</td>
                        <td>{{ $empleado->departamento }}</td>
                        <td>{{ $empleado->municipio }}</td>
                        <td>{{ $empleado->barrio }}</td>
                        <td>{{ $empleado->tipoEmpleado }}</td>
                        <td>{{ $empleado->salario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
