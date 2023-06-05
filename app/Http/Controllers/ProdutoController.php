<?php

namespace App\Http\Controllers;

use App\Models\ProdutoImagem;
use App\Models\Produto;
use App\Models\ProdutoEstoque;
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
        $produtos = Produto::where('PRODUTO.PRODUTO_ATIVO', 1)
            ->whereRaw('(PRODUTO.PRODUTO_PRECO - PRODUTO.PRODUTO_DESCONTO) > 0')
            ->get();

        return view('produtos.produtos', ['produtos' => $produtos]);
    }

    function outlet()
    {
        $produtos = Produto::where('PRODUTO_DESCONTO', '>', 0)
            ->where('PRODUTO_ATIVO', 1)
            ->whereRaw('(PRODUTO.PRODUTO_PRECO - PRODUTO.PRODUTO_DESCONTO) > 0')
            ->get();

        return view('produtos.produtos', ['produtos' => $produtos]);
    }

    //buscar produto
    function busca(Request $request)
    {
        $filter = $request->busca;
        $produtos = Produto::join('CATEGORIA', 'CATEGORIA.CATEGORIA_ID', 'PRODUTO.CATEGORIA_ID')
            ->where('PRODUTO.PRODUTO_ATIVO', 1)
            ->whereRaw('(PRODUTO.PRODUTO_PRECO - PRODUTO.PRODUTO_DESCONTO) > 0')
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
