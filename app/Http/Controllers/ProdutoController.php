<?php

namespace App\Http\Controllers;

use App\Models\ProdutoImagem;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    function produto($id = null)
    {
        $produto = Produto::find($id);

        return view('produtos.produto', ['produto' => $produto]);
    }

    function produtos()
    {
        $produtos = Produto::all();

        return view('produtos.produtos', ['produtos' => $produtos]);
    }

}
