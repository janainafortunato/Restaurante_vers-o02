<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use App\Models\User;
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
        Funcionario::create([
            'cpf'=> '263.440.940.01',
            'funcao'=> 'Cozinheiro',
            'endereco'=> 'Rua da Flor n 123',
            'email'=> 'teste@teste.com',
            'salario'=>'1500.00',
            'rg'=>'45.436.373.4',
            'cardapio_id'=> 1
        ]);
    }
}
