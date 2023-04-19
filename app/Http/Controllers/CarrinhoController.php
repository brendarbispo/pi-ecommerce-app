<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\Produto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    function adicionar(Request $request) : RedirectResponse
    {
        $usuario = auth()->user();
        $pedido = Pedido::where(['USUARIO_ID' => $usuario->USUARIO_ID])->where(['STATUS_ID' => 1])->first();

        if(is_null($pedido)){
            $pedido = Pedido::create([
                'USUARIO_ID' => $usuario->USUARIO_ID,
                'STATUS_ID' => 1,
                'PEDIDO_DATA' => date('Y-m-d H:i:s')
            ]);
        }

        $produto = Produto::where(['PRODUTO_ID' => $request->produtoId])->first();

        $pedidoItem = PedidoItem::create([
            'PRODUTO_ID' => $produto->PRODUTO_ID,
            'PEDIDO_ID' => $pedido->PEDIDO_ID,
            'ITEM_QTD' => $request->qtd,
            'ITEM_PRECO' => $produto->PRODUTO_PRECO,
        ]);

        return redirect ('/carrinho');
    }

    function carrinho(){
        $usuario = auth()->user();
        $pedido = Pedido::where(['USUARIO_ID' => $usuario->USUARIO_ID])->where(['STATUS_ID' => 1])->first();

        if(is_null($pedido)){
            return view('pedidoItens', ['pedidoItens' => []]);
        }

        $pedidoItens = PedidoItem::where('PEDIDO_ID', $pedido->PEDIDO_ID)->get();


        return view('carrinho', ['pedidoItens' => $pedidoItens]);
    }

}
