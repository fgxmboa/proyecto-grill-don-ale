<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oCliente = new cliente();
        $oCliente->nombre = 'Daniel';
        $oCliente->apellido = 'Vargas';
        $oCliente->cedula = '134976470';
        $oCliente->email = 'd.vargas@gmail.com';
        $oCliente->telefono = '83389091';
        $oCliente->direccion = 'Coronado';
        $oCliente->save();

        $oCliente2 = new cliente();
        $oCliente2->nombre = 'Jesus';
        $oCliente2->apellido = 'Castro';
        $oCliente2->cedula = '424735139';
        $oCliente2->email = 'j.castro@gmail.com';
        $oCliente2->telefono = '65422711';
        $oCliente2->direccion = 'Tibas';
        $oCliente2->save();

        $oCliente3 = new cliente();
        $oCliente3->nombre = 'David';
        $oCliente3->apellido = 'Ramirez';
        $oCliente3->cedula = '307284951';
        $oCliente3->email = 'd.ramirez@gmail.com';
        $oCliente3->telefono = '88273361';
        $oCliente3->direccion = 'Purral';
        $oCliente3->save();
        //cliente::factory(50)->create();
    }
}
