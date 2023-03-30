<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre']);

Route::get('sobre/{nome}', function (string $nome) {
    return "Olá, $nome".'!';
});

Route::get('sobre/{nome}/{sobrenome}/{idade?}', function (string $nome, string $sobrenome, int $idade = 1) {
    return "Olá, $nome".$sobrenome.'!'.$idade;
}) ->where('nome', '[A-Za-z]+')
  ->where('sobrenome', '[A-Za-z]+')
  ->where('idade', '[0-9]+');
