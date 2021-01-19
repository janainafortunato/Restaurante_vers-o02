<?php

namespace Database\Factories;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funcionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cpf' =>$this->faker->word,
            'funcao'=>$this->faker->word,
            'endereco'=>$this->faker->word,
            'email'=>$this->faker->word,
            'salario'=>$this->faker->randomDigit,
            'rg'=>$this->faker->word
        ];
    }
}
