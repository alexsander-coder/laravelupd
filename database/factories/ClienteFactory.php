<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Define aqui as definições dos campos do cliente
            'cpf' => $this->faker->numerify('###########'),
            'nome' => $this->faker->name,
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'dt_nascimento' => $this->faker->date,
            'endereco' => $this->faker->address,
            'estado' => $this->faker->state, 
            'cidade' => $this->faker->city,
        ];
    }
}
