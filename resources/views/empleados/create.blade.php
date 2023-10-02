<x-layouts.main-layout> 
 
       <section class="banner_main"> 
           <div class="container bg- p-3 rounded"> 
               <h1 class="text-center">Crear empleado</h1> 
            <form method="POST" action="{{url('/empleados') }}"> 
                @csrf 
                <div class="row">  
                        <x-input label="Nombre" name="nombre" id="nombre" type="text"> </x-input>
                        <x-input label="Cedula" name="cedula" id="cedula" type="text"></x-input>
                        <x-input label="Direccion" name="direccion" id="direccion" type="text"></x-input>
                        <x-input label="Departamento" name="departamento" id="departamento" type="text"></x-input>
                        <x-select></x-select>
                        <x-input label="Barrio" name="barrio" id="barrio" type="text"></x-input>
                        
                    <div class="form-group col-6 my-2"> 
                        <label for="tipo_empleado">Tipo de empleado</label>   

                        <select  class="form-control " name="tipo_empleado"> 
                            <option value="1">Administrativo</option> 
                            <option value="2">Asesor</option> 
                            <option value="3">Entregador</option> 
                            placeholder="--Seleccione una localidad"<option value="4">Gerente</option> 
                        </select> 
                    </div> 
                        <x-input label="Salario" name="salario" id="salario" type="text"></x-input>
                        <x-input label="Usuario" name="usuario" id="usuario" type="text"></x-input>
                        <x-input label="Contraseña" name="contraseña" id="contraseña" type="text"></x-input>
                </div> 
                <br>
                

            </form> 
        </div> 
    </section> 
     
    <script src="{{ asset('js/departamentos.js') }}"></script> 
</x-layouts.main-layout>
