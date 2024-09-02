<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\menu;
use App\Models\pedido;

// Definición de la clase que actúa como un modelo básico para almacenar información del cliente.
class ClassCliente{
    // Propiedades privadas de la clase que almacenan los detalles del cliente.
    private $idCliente;
    private $nombre;
    private $apellido;
    private $cedula;
    private $email;
    private $telefono;
    private $direccion;

    // Constructor de la clase que inicializa las propiedades con valores predeterminados.
    public function __construct(){
        $this -> idCliente = 0;
        $this -> nombre = "";
        $this -> apellido = "";
        $this -> cedula = "";
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
        $oMenus = menu::all();
        $oPedidos = pedido::all();

        return view('cliente.create', compact('oMenus', 'oPedidos'));
    }
    public function show($cliente){
        $oCliente = cliente::find($cliente);
        $oMenu = menu::find($oCliente->idMenu);
        $oPedido = pedido::find($oCliente->idOrdenes);

        return view("cliente.show", [
            'cliente' => $oCliente,
            'oMenu' => $oMenu,
            'oPedido' => $oPedido
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|numeric',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->cedula = $request->get('cedula');
        $cliente->email = $request->get('email');
        $cliente->telefono = $request->get('telefono');
        $cliente->direccion = $request->get('direccion');

        // Guardamos la información en la base de datos
        $cliente->save();

        return redirect()->route('cliente.show', $cliente);

    }
}
