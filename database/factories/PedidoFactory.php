<?php

namespace Database\Factories;

use App\Models\cliente;
use App\Models\menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idClientes' => cliente::all()->random()->idClientes,
            'fecha' => $this->faker->date(),
            'metodoPago' => $this->faker->randomElement(['Transferencia Bancaria', 'Efectivo', 'Sinpe Movil']),
            'tipoFactura' => $this->faker->randomElement(['Ordinaria', 'Electronica', 'No desea factura']),
            'paymentAmount' => menu::all()->random()->precio
        ];
    }
}
