@extends('layouts.app')

@section('content')
@role('administrativo')
@endrole

<div class="container mt-5 text-center">
        <img src="{{ asset('error-401.jpg') }}" alt="Error 401" style="max-width: 300px; margin-bottom: 20px;">
        <h1 class="display-4">Error 401</h1>
        <p class="lead">Acceso denegado</p>
    </div>

@ensection