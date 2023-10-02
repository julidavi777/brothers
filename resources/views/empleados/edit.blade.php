<x-layouts.main-layout> 
<h1>Editar Empleado</h1>

<form method="POST" action="{{ route('empleados.update', $empleado->id) }}" class="mt-4">
    @csrf
    @method('PUT')
    <div class="row">
        
            <x-input label="Nombre" name="nombre" id="nombre" type="text" :value="$empleado->nombre"></x-input>
            <x-input label="Cedula" name="cedula" id="cedula" type="text" :value="$empleado->cedula"></x-input>
            <x-input label="Direccion" name="direccion" id="direccion" type="text" :value="$empleado->direccion"></x-input>
            <x-input label="Departamento" name="departamento" id="departamento" type="text" :value="$empleado->departamento"></x-input>
            <x-input label="Municipio" name="municipio" id="municipio" type="text" :value="$empleado->municipio"></x-input>

            <x-select-municipio :selected="$empleado->municipio"></x-select-municipio>
            <x-input label="Barrio" name="barrio" id="barrio" type="text" :value="$empleado->barrio"></x-input>
            <div class="form-group">
                <label for="tipo_empleado">Tipo de empleado</label>
                <select class="form-control" name="tipo_empleado" id="tipo_empleado">
                    <option value="1" {{ $empleado->tipo_empleado == 1 ? 'selected' : '' }}>Administrativo</option>
                    <option value="2" {{ $empleado->tipo_empleado == 2 ? 'selected' : '' }}>Asesor</option>
                    <option value="3" {{ $empleado->tipo_empleado == 3 ? 'selected' : '' }}>Entregador</option>
                    <option value="4" {{ $empleado->tipo_empleado == 4 ? 'selected' : '' }}>Gerente</option>
                </select>
           
       
        
            <x-input label="Salario" name="salario" id="salario" type="text" :value="$empleado->salario"></x-input>
            <x-input label="Usuario" name="usuario" id="usuario" type="text" :value="$empleado->usuario"></x-input>
            <x-input label="Contraseña" name="contraseña" id="contraseña" type="password"></x-input>
       
        <div class="col-12 mt-3">
            <x-button class="btn btn-primary">Actualizar Empleado</x-button>
    </div>  
   
</form>

</x-layouts.main-layout> 
