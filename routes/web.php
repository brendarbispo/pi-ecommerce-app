<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\PerfilController;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    return view('index', ['request' => $request]);
});

/*
|--------------------------------------------------------------------------
| Route using method get to atchieve path. Using controller whith method.
| Rota usando o metodo get para entar no caminho. Usando a controller com o metodo.
|--------------------------------------------------------------------------
*/

Route::get('/produto/{id}', [ProdutoController::class, "produto"]);

Route::get('/produtos', [ProdutoController::class, "produtos"]);

/*
|--------------------------------------------------------------------------
| Methods that can only be accessed after passing through the middleware
| Funcoes que só podem aser acessados apos passar pelo 'middleware'
|--------------------------------------------------------------------------
*/

Route::middleware('auth.custom')->group(function () {
    //perfil, carrinho, Xpedidos, pedido, endereços
    Route::get('/pedidos', function () {
        return view('pedidos');
    });

    Route::get('/perfil', [PerfilController::class, 'perfil']);
    Route::get('/perfil/editar', [PerfilController::class, 'buscar']);
    Route::post('/perfil/editar', [PerfilController::class, 'editar']);

    //buscar e criar endereco
    Route::get('/endereco', [EnderecoController::class, 'endereco']);
    Route::post('/endereco', [EnderecoController::class, 'criar']);
    Route::get('/endereco/editar/{id}', [EnderecoController::class, 'buscar']);
    Route::post('/endereco/editar/', [EnderecoController::class, 'editar']);

    Route::get('/carrinho', [CarrinhoController::class, 'carrinho']);
    Route::get('/carrinho/add/{produtoId}/{qtd}', [CarrinhoController::class, 'adicionar']);
});

require __DIR__ . '/auth.php';
