<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Definición de la clase `ClassMenu` que actúa como un modelo básico para almacenar información de un menú.
class ClassMenu{
    // Propiedades privadas de la clase que almacenan los detalles de un menú.
    private $idMenu;
    private $nombreMenu;
    private $precio;
    private $tipo;
    private $descripcion;

    // Constructor de la clase que inicializa las propiedades con valores predeterminados.
    public function __construct(){
        $this -> idMenu = 0;
        $this -> nombreMenu = "";
        $this -> precio = 0;
        $this -> tipo = "";
        $this -> descripcion = "";
    }

    // Método __get que permite acceder a las propiedades privadas de la clase.
    public function __get($property){
        if(property_exists($this, $property)){
            return $this -> $property; // Retorna el valor de la propiedad si existe.
        }
    }

    // Método __set que permite establecer valores a las propiedades privadas de la clase.
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this -> $property = $value; // Establece el valor de la propiedad si existe.
        }

        return $this;
    }
}

// Definición del controlador `MenuController` que maneja las operaciones relacionadas con los menús.
class MenuController extends Controller
{
    // Método index que retorna la vista principal de los menús.
    public function index(){
        return view('menu.menu');
    }

    // Método create que retorna la vista para crear un nuevo menú.
    public function create(){
        return view('menu.create');
    }

    // Método show que muestra los detalles de un menú específico.
    public function show($menu){
        return view('menu.show', ['agenda' => $menu]);
    }

     // Método store que maneja la solicitud de almacenamiento de un nuevo menú.
    public function store(Request $request){
        $request -> validate([
            'nombreMenu' => 'required',
            'precio' => 'required|numeric',
            'tipo' => 'required',
            'descripcion' => 'required'
        ]);

         // Crea una nueva instancia de la clase ClassMenu y asigna los valores validados.
        $menu = new ClassMenu();
        $menu -> idMenu = 1;
        $menu -> nombreMenu = $request -> get('nombreMenu');
        $menu -> precio = $request -> get('precio');
        $menu -> tipo = $request -> get('tipo');
        $menu -> descripcion = $request -> get('descripcion');

        // Retorna la vista menu.show con los datos del menú recién creado.
        return view('menu.show', ['menu' => $menu]);

    }
}
