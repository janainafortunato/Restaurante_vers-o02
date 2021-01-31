<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CardapioController;
use \App\Models\Cardapio;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/cardapio/novo', [CardapioController::class, 'store'])->name('add-cardapio');
Route::model('cardapio', Cardapio::class);
Route::get('/cardapio/remover/{cardapio}', [CardapioController::class, 'destroy'])->name('rm-cardapio');

require __DIR__.'/auth.php';
