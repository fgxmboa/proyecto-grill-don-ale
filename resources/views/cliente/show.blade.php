@extends('layouts.app')

@section('title', 'Vista de cliente')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>¡Vista de un cliente!</h1>
    <h2>Vista correspondiente para el cliente: {{ $cliente }}</h2>
@endsection
