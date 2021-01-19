<?php

namespace Database\Factories;

use App\Models\Cardapio;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardapioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cardapio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' =>$this->faker->word,
            'descricao'=>$this->faker->word,
            'preco'=>$this->faker->randomDigit
        ];
    }
}
