@extends('layouts.app')

@section('title', 'Pedido | Grill Don Ale')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>¡Vista de pedidos!</h1>
    <h2>Vista correspondiente para el pedido: {{ $pedido }}</h2>
@endsection
