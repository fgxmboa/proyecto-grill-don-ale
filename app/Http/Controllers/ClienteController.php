<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

// Definición de la clase que actúa como un modelo básico para almacenar información del cliente.
class ClassCliente{
    // Propiedades privadas de la clase que almacenan los detalles del cliente.
    private $idCliente;
    private $nombre;
    private $apellidos;
    private $email;
    private $telefono;
    private $direccion;

    // Constructor de la clase que inicializa las propiedades con valores predeterminados.
    public function __construct(){
        $this -> idCliente = 0;
        $this -> nombre = "";
        $this -> apellidos = "";
        $this -> email = "";
        $this -> telefono = "";
        $this -> direccion = "";
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

// Definición del controlador que maneja las operaciones relacionadas con los clientes.
class ClienteController extends Controller
{
    public function index(){
        $oClientes = cliente::paginate();
        return view('cliente.index', compact('oClientes'));
    }
    public function create(){
        return view('cliente.create');
    }
    public function show($cliente){
        return view('cliente.show', ['cliente' => $cliente]);
    }
    public function store(Request $request){
        $request -> validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);

         // Crea una nueva instancia de la clase y asigna los valores validados.
        $cliente = new ClassCliente();
        $cliente -> idCliente = 1;
        $cliente -> nombre = $request -> get('nombre');
        $cliente -> apellidos = $request -> get('apellidos');
        $cliente -> email = $request -> get('email');
        $cliente -> telefono = $request -> get('telefono');
        $cliente -> direccion = $request -> get('direccion');

        // Retorna la vista pedido.show con los datos del cliente recién creado.
        return view('cliente.show', ['cliente' => $cliente]);

    }
}
