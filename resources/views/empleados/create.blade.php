@extends('layouts.app')

@section('content')
    <section class="banner_main">
        <div class="container bg-dark p-3 rounded text-white">
            <h1 class="text-white text-center">Crear empleado</h1>
            <form method="POST" action="{{ route('nombre_de_la_ruta_para_crear_empleado') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" >
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" >
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Cédula</label>
                        <input type="text" class="form-control" name="cedula" >
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Dirección</label>
                        <input type="text" class="form-control" name="direccion" >
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Departamento</label>
                        
                        <select  class="form-control" name="departamento" id="departamento">
                            <option value="null">--seleccione un departamento</option>     
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Municipio</label>
                        
                        <select  class="form-control" name="municipio" id="municipio">
                            <option value="null">--Seleccione una municipio</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Barrio</label>
                        <input type="text" class="form-control" name="barrio" >
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Tipo de empleado</label>
                        
                        <select  class="form-control" name="tipo_empleado">
                            <option value="1">Administrativo</option>
                            <option value="2">Asesor</option>
                            <option value="3">Entregador</option>
                            <option value="4">Gerente</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Salario</label>
                        <input type="text" class="form-control" name="salario" >
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Usuario-Email</label>
                        <input type="text" class="form-control" name="usuario" >
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" >
                    </div>
                    <div class="form-group col-6">
                        <br>
                        <button type="submit" class="btn btn-primary m-e">Crear empleado</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="{{ asset('js/departamentos.js') }}"></script>
@endsection
