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

Route::get('/', function () {

    $array = [1, 2, 3, 4, 5];
    $nome = ['Brenda', 'Thaina', 'Joao'];
    $idade = 25;

    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'array' => $array
        ]
    );
});

Route::get('/produtos', [ProdutoController::class, "produtos"]);

Route::get('/produto/{id}',[ProdutoController::class, "produto"]);
