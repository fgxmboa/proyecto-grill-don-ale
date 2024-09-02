@extends('layouts.app')

@section('title', 'Editar cliente | Grill Don Ale')

@section('content')
@section('sidebar')
    @parent
@endsection
    <form action="{{ route('cliente.update', $oCliente->idClientes) }}" method="POST">
        @method('PUT')
        @csrf
        <div style="text-align: left; font-family: Arial">
            <strong><span id="idFotograma" style="font-family: Arial; font-size: 24pt">Crear nuevo cliente</span></strong>
            <br /><br />

            Nombre:<br />
            <input name="nombre" type="text" id="nombre" style="width:504px;" value="{{ old('nombre', $oCliente->nombre) }}"/><br />
            @error('nombre')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Apellidos:<br />
            <input name="apellido" type="text" id="apellido" style="width:504px;" value="{{ old('apellido', $oCliente->apellido) }}" /><br />
            @error('apellido')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Cédula:<br/>
            <input name="cedula" type="text" id="cedula" style="width:504px;" value="{{ old('cedula', $oCliente->cedula) }}"/><br />
            @error('cedula')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Correo Electronico:<br />
            <input name="email" type="email" id="email" style="width:504px;" value="{{ old('email', $oCliente->email) }}"/><br />
            @error('email')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Telefono:<br/>
            <input name="telefono" type="text" id="telefono" style="width:504px;" value="{{ old('telefono', $oCliente->telefono) }}"/><br />
            @error('telefono')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Direccion:<br/>
            <textarea name="direccion" rows="2" cols="20" id="direccion" style="height:64px;width:440px;" value="{{ old('direccion', $oCliente->direccion) }}"></textarea><br />
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
