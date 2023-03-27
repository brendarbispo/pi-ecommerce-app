<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ProdutoController
};

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

/*Route::get('/', function () {

    

    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'array' => $array
        ]
    );
});*/

Route::get('/produtos', [ProdutoController::class, "produtos"]);

Route::get('/produto/{id}',[ProdutoController::class, "produto"]);

Route::get('/', function(){
    return view('index');
});

Route::get('/carrinho', function(){
    return view('carrinho');
});

Route::get('/listaPedidos', function(){
    return view('listaPedidos');
});

Route::get('/cadastro', function(){
    return view('cadastro');
});


Route::get('/produto', function(){
    return view('produto');
});

Route::get('layouts/header', function(){
    return view('header');
});