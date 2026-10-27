<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNos;
use App\Http\Controllers\Contato;
use App\Http\Controllers\Login;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Fornecedores;
use App\Http\Controllers\Produtos;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/sobre-nos', [SobreNos::class, 'principal'])->name('site.sobre-nos');

Route::get('/contato', [Contato::class, 'contato'])->name('site.contato');
Route::post('/contato', [Contato::class, 'salvar'])->name('site.contato');

Route::get('/login', [Login::class, 'index'])->name('site.login');
Route::post('/login', [Login::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao,visitante')->prefix('app')->group(function () {
    Route::get('/clientes', [Clientes::class, 'index'])->name('app.clientes');
    Route::get('/fornecedores', [Fornecedores::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [Produtos::class, 'index'])->name('app.produtos');
});

Route::fallback(function () {
    echo 'Página não encontrada';
})->name('site.404');
