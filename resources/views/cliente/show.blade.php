@extends('layouts.app')

@section('title', 'Vista de cliente')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>¡Vista de un cliente!</h1>
    <h2>Vista correspondiente para el cliente: {{ $cliente->nombre . ' ' . $cliente->apellido }}</h2>
    <div class="card" style="width: 36rem;">
        <div class="card-body">
            <h5 class="card-title">Vista correspondiente para el cliente: {{ $cliente->nombre . ' ' . $cliente->apellido }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Datos del cliente</h6>
            <p class="card-text">
                Nombre: {{ $cliente->nombre . ' ' . $cliente->apellido }}<br>
                Cedula: {{ $cliente->cedula }} <br>
                Correo electronico: {{ $cliente->email }} <br>
                Telefono: {{ $cliente->telefono }} <br>
                Direccion: {{ $cliente->direccion }} <br>
            </p>
            <a href="{{ route('cliente.index') }}" class="btn btn-outline-primary">Volver a clientes</a>
        </div>
    </div>
@endsection
