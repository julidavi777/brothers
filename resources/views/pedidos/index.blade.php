
<x-layouts.main-layout>
<h1>Lista de Pedidos</h1>

<div class="container">

        <!-- Formulario de filtro con estilos de Bootstrap -->
        <form method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="numero_orden">Número de Orden:</label>
                        <input type="text" name="numero_orden" id="numero_orden" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="fecha_desde">Fecha Desde:</label>
                        <input type="date" name="fecha_desde" id="fecha_desde" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="fecha_hasta">Fecha Hasta:</label>
                        <input type="date" name="fecha_hasta" id="fecha_hasta" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="empleado">Empleado:</label>
                        <select name="empleado" id="empleado" class="form-control">
                            <option value="">Seleccionar Empleado</option>
                            <!-- Agrega opciones de empleados desde tu base de datos -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cliente">Cliente:</label>
                        <select name="cliente" id="cliente" class="form-control">
                            <option value="">Seleccionar Cliente</option>
                            <!-- Agrega opciones de clientes desde tu base de datos -->
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Mostrar el total de pedidos -->
        <p>Total de Pedidos: {{ count($pedidos) }}</p>

        <!-- Lista de pedidos -->
        <ul>
            @foreach($pedidos as $pedido)
                <li>{{ $pedido->nombre }}</li>
                <!-- Agrega aquí los datos del pedido que deseas mostrar -->
            @endforeach
        </ul>
    </div>
    <x-input label="mamahuevo" name="mamahuevo" id="perra" type="text">
        
    </x-input>
</x-layouts.main-layout>