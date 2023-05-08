<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\Produto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    function adicionar(Request $request): RedirectResponse
    {
        $usuario = auth()->user();
        $pedido = Pedido::where(['USUARIO_ID' => $usuario->USUARIO_ID])->where(['STATUS_ID' => 1])->first();

        if (is_null($pedido)) {
            $pedido = Pedido::create([
                'USUARIO_ID' => $usuario->USUARIO_ID,
                'STATUS_ID' => 1,
                'PEDIDO_DATA' => date('Y-m-d H:i:s')
            ]);
        }

        $produto = Produto::where(['PRODUTO_ID' => $request->produtoId])->first();

        $pedidoItem = PedidoItem::where(['PRODUTO_ID' => $request->produtoId])
            ->where(['PEDIDO_ID' => $pedido->PEDIDO_ID])
            ->first();

        //Se item nao exister criar um novo
        if (is_null($pedidoItem)) {
            PedidoItem::create([
                'PRODUTO_ID' => $produto->PRODUTO_ID,
                'PEDIDO_ID' => $pedido->PEDIDO_ID,
                'ITEM_QTD' => $request->qtd,
                'ITEM_PRECO' => $produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO ?? 0,
            ]);
        } else {
            //Se o cliente deletar um item e adicionar novamente ao carrinho.
            if ($pedidoItem->ITEM_QTD < 0) {
                PedidoItem::where(['PRODUTO_ID' => $request->produtoId])
                    ->where(['PEDIDO_ID' => $pedido->PEDIDO_ID])
                    ->update(['ITEM_QTD' => $request->qtd]);
            } else {
                //Se o item já existir no carrinho, atualizar a qtd
                $novaQtd = $pedidoItem->ITEM_QTD + $request->qtd;

                PedidoItem::where(['PRODUTO_ID' => $request->produtoId])
                    ->where(['PEDIDO_ID' => $pedido->PEDIDO_ID])
                    ->update(['ITEM_QTD' => $novaQtd]);
            }
        }

        return redirect('/carrinho');
    }

    function remover(Request $request): RedirectResponse
    {
        $usuario = auth()->user();
        $pedido = Pedido::where(['USUARIO_ID' => $usuario->USUARIO_ID])->where(['STATUS_ID' => 1])->first();

        if (is_null($pedido)) {
            return redirect('/carrinho');
        }

        PedidoItem::where(['PRODUTO_ID' => $request->produtoId])
            ->where(['PEDIDO_ID' => $pedido->PEDIDO_ID])
            ->update(['ITEM_QTD' => -1]);

        return redirect('/carrinho');
    }

    function carrinho()
    {
        $usuario = auth()->user();
        $pedido = Pedido::where(['USUARIO_ID' => $usuario->USUARIO_ID])->where(['STATUS_ID' => 1])->first();

        if (is_null($pedido)) {
            return view('carrinho', [
                'pedidoItens' => [],
                'valorTotal' => 0,
                'qtdTotal' => 0
            ]);
        }

        $pedidoItens = PedidoItem::where('PEDIDO_ID', $pedido->PEDIDO_ID)
            ->where('ITEM_QTD', '>', 0)
            ->get();

        $valorTotal = 0;
        $qtdTotal = 0;

        foreach ($pedidoItens as $pedidoItem) {
            if ($pedidoItem->ITEM_QTD > 0) {
                $valorTotal += $pedidoItem->ITEM_PRECO * $pedidoItem->ITEM_QTD;
                $qtdTotal += $pedidoItem->ITEM_QTD;
            }
        }

        return view('carrinho', [
            'pedidoItens' => $pedidoItens,
            'valorTotal' => $valorTotal,
            'qtdTotal' => $qtdTotal
        ]);
    }

    function checkout(Request $request)
    {

        $usuario = auth()->user();
        $pedido = Pedido::where(['USUARIO_ID' => $usuario->USUARIO_ID])->where(['STATUS_ID' => 1])->first();

        $pedido->STATUS_ID = 2;
        $pedido->save();

        return redirect('/pedido/' . $pedido->PEDIDO_ID);
    }
}
