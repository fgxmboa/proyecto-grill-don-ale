<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\menu;
use App\Models\pedido;
use App\Http\Requests\StoreClienteRequest;

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
    public function store(StoreClienteRequest $request){
        $oCliente = new Cliente();
        $oCliente->nombre = $request->get('nombre');
        $oCliente->apellido = $request->get('apellido');
        $oCliente->cedula = $request->get('cedula');
        $oCliente->email = $request->get('email');
        $oCliente->telefono = $request->get('telefono');
        $oCliente->direccion = $request->get('direccion');

        // Guardamos la información en la base de datos
        $oCliente->save();

        return redirect()->route('cliente.show', $oCliente);

    }

    public function edit(cliente $cliente){
        $oCliente = ($cliente);
        return view('cliente.edit', compact('oCliente'));
    }

    public function update(Request $request, cliente $oCliente){
        $oCliente->nombre = $request->get('nombre');
        $oCliente->apellido = $request->get('apellido');
        $oCliente->cedula = $request->get('cedula');
        $oCliente->email = $request->get('email');
        $oCliente->telefono = $request->get('telefono');
        $oCliente->direccion = $request->get('direccion');

        // Guardamos la información actualizada en la base de datos
        $oCliente->save();

        return redirect()->route('cliente.show', $oCliente);
    }

    public function destroy(cliente $cliente){
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
