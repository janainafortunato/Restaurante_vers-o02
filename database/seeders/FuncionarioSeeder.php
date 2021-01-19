<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use App\Models\Cardapio;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cardapios = Cardapio::all();
        foreach($Cardapios as $cardapio){
            Funcionario::factory(5)->create([
                'cardapio_id'=> $cardapio->id
            ]);
        }
    }
}
