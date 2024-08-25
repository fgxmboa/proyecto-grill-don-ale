<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nombre' => $this->faker->firstName(),
        'apellido' => $this->faker->lastName(),
        'cedula' => $this->faker->numberBetween(100000000, 999999999),
        'email' => $this->faker->unique()->safeEmail(),
        'telefono' => $this->faker->numberBetween(70000000, 89999999),
        'direccion' => $this->faker->address()
        ];
    }
}
