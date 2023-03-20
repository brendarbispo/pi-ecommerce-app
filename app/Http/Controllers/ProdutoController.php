<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function produto($id = null)
    {

        return view('produtos.produto', ['id' => $id]);
    }

    function produtos()
    {
        $produtos = ProdutoModel::all();

        return view('produtos.produtos', ['produtos' => $produtos]);
    }
}
