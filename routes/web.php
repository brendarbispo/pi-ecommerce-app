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

<<<<<<< Updated upstream
Route::get('/', function(){ return view('index');});

Route::get('/produto/{id}',[ProdutoController::class, "produto"]);

Route::get('/produtos', [ProdutoController::class, "produtos"]);
=======
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

Route::get('/', function(){
    return view('welcome');
});

Route::middleware('auth')->group(function () {
Route::get('/produtos', [ProdutoController::class, "produtos"]);
});

Route::get('/produto/{id}',[ProdutoController::class, "produto"]);

Route::get('/', function(){
    return view('index');
});


//Route::post('/carrinho/{id}', [CarrinhoController::class, 'store'])->name("");

>>>>>>> Stashed changes

Route::get('/carrinho', function(){
    return view('carrinho');
});

<<<<<<< Updated upstream
Route::middleware('auth')->group(function () {
    //
    //perfil, carrinho, Xpedidos, pedido, endereços
    Route::get('/pedidos', function(){
        return view('pedidos');
    });
    
    });
    
require __DIR__.'/auth.php';
=======
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


Route::get('/index', function(){
    return view('index');

});

Route::get('/perfil', function(){
    return view('perfil');
});



require __DIR__.'/auth.php';
>>>>>>> Stashed changes
