@extends('layouts.app')

@section('title', 'Pedido | Grill Don Ale')

@section('sidebar')
    @parent
@endsection
@section('content')
    <form action="{{ route('pedido.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div style="text-align: left; font-family: Arial">
            <strong><span id="idFotograma" style="font-family: Arial; font-size: 24pt">Crear nuevo pedido</span></strong>
            <br /><br />

            Fecha del pedido:<br />
            <input name="fecha" type="date" id="fecha" style="width:504px;" /><br />
            @error('fecha')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Método de pago:<br />
            <select name="metodoPago" id="metodoPago" style="font-size:Medium; width:296px;">
                <option value="1">Transferencia</option>
                <option value="2">SINPE Movil</option>
                <option value="3">Efectivo (Contra entrega)</option>
            </select><br/>
            @error('metodoPago')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Total a pagar:<br />
            <input name="paymentAmount" type="number" id="paymentAmount" style="width:504px;" /><br />
            @error('paymentAmount')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Tipo de factura:<br />
            <select name="tipoFactura" id="tipoFactura" style="font-size:Medium; width:296px;">
                <option value="1">Ordinaria</option>
                <option value="2">Electrónica </option>
                <option value="3">No desea</option>
            </select><br/>
            @error('tipoFactura')
                <br>
                <small>{{ $message }}</small>
                <br>
            @enderror

            Estado:<br/>
            <textarea name="estado" rows="2" cols="20" id="estado" style="height:64px;width:440px;"></textarea><br />
            @error('estado')
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
