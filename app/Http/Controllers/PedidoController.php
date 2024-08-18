<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Definición de la clase que actúa como un modelo básico para almacenar información de un pedido.
class ClassPedido{
    // Propiedades privadas de la clase que almacenan los detalles de un pedido.
    private $idPedido;
    private $fecha;
    private $metodoPago;
    private $paymentAmount;
    private $tipoFactura;
    private $estado;

    // Constructor de la clase que inicializa las propiedades con valores predeterminados.
    public function __construct(){
        $this -> idPedido = 0;
        $this -> fecha = 0;
        $this -> metodoPago = "";
        $this -> paymentAmount = 0;
        $this -> tipoFactura = "";
        $this -> estado = "";
    }

    // Método __get que permite acceder a las propiedades privadas de la clase.
    public function __get($property){
        if(property_exists($this, $property)){
            return $this -> $property;
        }
    }

    // Método __set que permite establecer valores a las propiedades privadas de la clase.
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this -> $property = $value;
        }

        return $this;
    }
}

// Definición del controlador que maneja las operaciones relacionadas con los pedidos.
class PedidoController extends Controller
{
    public function index(){
        return view('pedido.index');
    }

    public function create(){
        return view('pedido.create');
    }

    public function show($pedido){
        return view('pedido.show', ['pedido' => $pedido]);

    }

    public function store(Request $request){
        $request -> validate([
            'fecha' => 'required|date',
            'metodoPago' => 'required',
            'paymentAmount' => 'required',
            'tipoFactura' => 'required',
            'estado' => 'required',
        ]);

        // Crea una nueva instancia de la clase y asigna los valores validados.
        $pedido = new ClassPedido();
        $pedido  -> idPedido = 1;
        $pedido  -> fecha = $request -> get('fecha');
        $pedido  -> metodoPago = $request -> get('metodoPago');
        $pedido  -> paymentAmount = $request -> get('paymentAmount');
        $pedido  -> tipoFactura = $request -> get('tipoFactura');
        $pedido  -> estado = $request -> get('estado');

        // Retorna la vista pedido.show con los datos del pedido recién creado.
        return view('pedido.show', ['pedido' => $pedido]);
    }
}
