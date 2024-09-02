@extends('layouts.app')

@section('title', 'Menu | Grill Don Ale')

@section('content')
@section('sidebar')
    @parent

@endsection

@section('content')
    <h1>Bienvenido al registro de clientes para Grill Don Ale</h1>
    <a href="{{ route('cliente.create') }}">Ingresar nueva cliente</a>
    <h2>Listado de clientes existentes</h2>
    <ul>
        @foreach ($oClientes as $oCliente)
            <li>
                <a href="{{ route('cliente.show', $oCliente->idClientes) }}">{{ $oCliente->nombre. ' '.  $oCliente->apellido}}</a>
            </li>
        @endforeach
    </ul>
@endsection
