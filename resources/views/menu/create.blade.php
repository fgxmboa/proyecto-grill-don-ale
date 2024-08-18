@extends('layouts.app')

@section('title', 'Menú | Grill Don Ale')

@section('sidebar')
    @parent
@endsection
@section('content')
    <form action="{{ route('menu.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div style="text-align: left; font-family: Arial">
            <strong><span id="idFotograma" style="font-family: Arial; font-size: 24pt">Crear nuevo menú</span></strong>
            <br /><br />

            Nombre menú:<br />
            <input name="nombre" type="text" id="nombre" style="width:504px;" /><br />
            @error('nombre')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Precio:<br />
            <input name="precio" type="text" id="precio" style="width:504px;" /><br />
            @error('precio')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Tipo de menú:<br />
            <select name="tipo" id="tipo" style="font-size:Medium; width:296px;">
                <option value="1">Menú Tico</option>
                <option value="2">Menú Americano</option>
                <option value="3">Menú Argentino</option>
            </select><br/>
            @error('tipo')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Descripción:<br/>
            <textarea name="descripcion" rows="2" cols="20" id="descripcion" style="height:64px;width:440px;"></textarea><br />
            @error('descripcion')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            <input type="submit" name="btEnviar" value="Enviar datos" id="btEnviar" style="width:112px;" />
            &nbsp;
            <input type="reset" name="btRestablecer" value="Restablecer" id="btRestablecer" style="width:112px;"/>
        </div>
    </form>
@endsection
