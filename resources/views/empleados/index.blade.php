<x-layouts.main-layout> 
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
                    <th><a href="{{url('empleados/edit')}}" class="btn btn-primary mt-3">Editar</a></th> 
                </tr> 
            </thead> 
             
        </table> 
 
     
    <a href="{{url('empleados/create')}}" class="btn btn-primary mt-3">Crear Empleado</a> 
     
 
 
    </div> 
</x-layouts.main-layout>