<?php

namespace Database\Seeders;

use App\Models\Cardapio;
use Illuminate\Database\Seeder;

class CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cardapio::create([
            'tipo'=> 'Lasanha de Frango com Queijo',
            'descricao'=> 'Massa de macarrão, queijo, molho branco, presunto e frango',
            'preco'=> '20.00',
            'user_id'=> 1
        ]);
    }
}
