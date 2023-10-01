
@extends('layouts.main-layout')

@section('content')
    <h1>Lista de Pedidos</h1>
    <ul>
        @foreach($pedidos as $pedido)
            <li>{{ $pedido->nombre }}</li>
            <!-- Agrega aquí los datos del pedido que deseas mostrar -->
        @endforeach
    </ul>
@endsection