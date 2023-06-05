<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\PerfilController;
use App\Models\Categoria;
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
    $produtos = Produto::where('PRODUTO_ATIVO', 1)
        ->whereRaw('(PRODUTO_PRECO - PRODUTO_DESCONTO) > 0')
        ->get()
        ->take(4);

    $categorias = Categoria::where('CATEGORIA_ATIVO', 1)
        ->get()
        ->take(10);

    return view('index', ['request' => $request, 'produtos' => $produtos, 'categorias' => $categorias]);
});

/*
|--------------------------------------------------------------------------
| Route using method get to atchieve path. Using controller whith method.
| Rota usando o metodo get para entar no caminho. Usando a controller com o metodo.
|--------------------------------------------------------------------------
*/

Route::get('/produto/{id}', [ProdutoController::class, "produto"]);

Route::get('/produtos', [ProdutoController::class, "produtos"]);
Route::get('/outlet', [ProdutoController::class, "outlet"]);
Route::get('/produtos/{busca}', [ProdutoController::class, "busca"]);

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
    Route::get('/pedido/{id}', [PerfilController::class, 'pedido']);

    //buscar e criar endereco
    Route::get('/endereco', [EnderecoController::class, 'endereco']);
    Route::post('/endereco', [EnderecoController::class, 'criar']);
    Route::get('/endereco/editar/{id}', [EnderecoController::class, 'buscar']);
    Route::post('/endereco/editar/', [EnderecoController::class, 'editar']);

    Route::get('/carrinho', [CarrinhoController::class, 'carrinho']);
    Route::post('/carrinho/add', [CarrinhoController::class, 'adicionar']);
    Route::get('/carrinho/add/{produtoId}/{qtd}', [CarrinhoController::class, 'adicionar']);

    Route::get('/carrinho/remover/{produtoId}', [CarrinhoController::class, 'remover']);

    Route::post('/checkout', [CarrinhoController::class, 'checkout']);
});

require __DIR__ . '/auth.php';
