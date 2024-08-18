@extends('layouts.app')

@section('title', 'Cliente | Grill Don Ale')

@section('content')
@section('sidebar')
    @parent
@endsection
    <form action="{{ route('cliente.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div style="text-align: left; font-family: Arial">
            <strong><span id="idFotograma" style="font-family: Arial; font-size: 24pt">Crear nuevo cliente</span></strong>
            <br /><br />

            Nombre:<br />
            <input name="nombre" type="text" id="nombre" style="width:504px;" /><br />
            @error('nombre')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Apellidos:<br />
            <input name="apellidos" type="text" id="apellidos" style="width:504px;" /><br />
            @error('apellidos')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Correo Electronico:<br />
            <input name="email" type="email" id="email" style="width:504px;" /><br />
            @error('email')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Telefono:<br/>
            <input name="telefono" type="text" id="telefono" style="width:504px;" /><br />
            @error('telefono')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Direccion:<br/>
            <textarea name="direccion" rows="2" cols="20" id="direccion" style="height:64px;width:440px;"></textarea><br />
            @error('direccion')
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
