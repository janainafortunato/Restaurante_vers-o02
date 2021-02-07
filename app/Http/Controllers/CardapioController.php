<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardapioController extends Controller
{
    
    public function list() {
        return auth()->user()->cardapios;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cardapio::create([
            'tipo'=> $request->tipo,
            'descricao'=> $request->descricao,
            'preco'=> $request->preco,
            'user_id'=> Auth::user()->id,
        ]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function show(Cardapio $cardapio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function edit(Cardapio $cardapio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cardapio $cardapio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cardapio $cardapio)
    {
        //
         $cardapio->delete();
         
         return redirect('dashboard');
    }
}
