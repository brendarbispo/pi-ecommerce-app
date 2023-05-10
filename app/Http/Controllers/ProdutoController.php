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
    //buscar produto
    function busca(Request $request)
    {
        $filter = $request->busca;
        $produtos = Produto::join('CATEGORIA', 'CATEGORIA.CATEGORIA_ID', 'PRODUTO.CATEGORIA_ID')
            ->where(function ($query) use ($filter) {
                if ($filter != '') {
                    $query->where('PRODUTO.PRODUTO_NOME', 'LIKE', "%{$filter}%");
                    $query->orWhere('PRODUTO.PRODUTO_DESC', 'LIKE', "%{$filter}%");
                    $query->orWhere('CATEGORIA.CATEGORIA_NOME', 'LIKE', "%{$filter}%");
                    $query->orWhere('CATEGORIA.CATEGORIA_DESC', 'LIKE', "%{$filter}%");
                }
            })
            ->get();

        return view('produtos.produtos', ['produtos' => $produtos]);
    }
}
