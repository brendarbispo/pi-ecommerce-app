<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use App\Http\Controllers\AuthController;

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

Route::get('/', function(){ return view('index');});

Route::get('/produto/{id}',[ProdutoController::class, "produto"]);

Route::get('/produtos', [ProdutoController::class, "produtos"]);

Route::get('/carrinho', function(){
    return view('carrinho');
});

Route::middleware('auth')->group(function () {
    //
    //perfil, carrinho, Xpedidos, pedido, endereços
    Route::get('/pedidos', function(){
        return view('pedidos');
    });
    
    });
    
require __DIR__.'/auth.php';