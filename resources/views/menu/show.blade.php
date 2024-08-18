@extends('layouts.app')

@section('title', 'Menú | Grill Don Ale')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>¡Vista del menú!</h1>
    <h2>Vista correspondiente para el menú: {{ $menu }}</h2>
@endsection
