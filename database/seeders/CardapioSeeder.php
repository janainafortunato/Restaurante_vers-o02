<?php

namespace Database\Seeders;

use App\Models\Cardapio;
use App\Models\User;
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
        $Users = User::all();
        foreach($Users as $user){
            Cardapio::factory(5)->create([
                'user_id'=> $user->id
            ]);
        }
    }
        
}
