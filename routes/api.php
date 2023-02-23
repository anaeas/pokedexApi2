<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'login']);
Route::get('listaPokemon', [PokemonController::class, 'index']);
Route::post('registroPokemon', [PokemonController::class, 'cadastrar']);
Route::get('pesquisatipo', [PokemonController::class, 'pesquisaTipo']);
Route::get('pesquisahabilidade', [PokemonController::class, 'pesquisaHabilidade']);
Route::get('quantpokemons', [PokemonController::class, 'quantPokemons']);
Route::get('top3tipos', [PokemonController::class, 'top3tipos']);
Route::get('top3habilidades', [PokemonController::class, 'top3habilidades']);

Route::get('listaNomeImagem', [PokemonController::class, 'nomesImagens']);
Route::get('detalhesPokemon', [PokemonController::class, 'detalhes']);



Route::get('testeget', [TesteController::class, 'testeget']);
Route::get('testelista', [TesteController::class, 'testelista']);
Route::post('testepost', [TesteController::class, 'testepost']);
Route::post('testelogin', [TesteController::class, 'testelogin']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});