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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');

Route::get('/contato', function () {
    return redirect()->route('site.sobre');
})->name('site.contato');

//Route::redirect('/contato', '/sobre');

Route::fallback(function () {
    return 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para página inicial';
});

Route::get('sobre/{nome}', function (string $nome) {
    return "Olá, $nome".'!';
});

Route::get('sobre/{nome}/{sobrenome}/{idade?}', function (string $nome, string $sobrenome, int $idade = 1) {
    return "Olá, $nome".$sobrenome.'!'.$idade;
}) ->where('nome', '[A-Za-z]+')
  ->where('sobrenome', '[A-Za-z]+')
  ->where('idade', '[0-9]+');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function () {
        return 'fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('site.teste')
    ->where('p1', '[0-9]+')
    ->where('p2', '[0-9]+');
