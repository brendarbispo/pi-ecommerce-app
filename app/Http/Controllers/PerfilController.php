<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    function perfil()
    {
        $usuario = auth()->user();
        $enderecos = Endereco::where(['USUARIO_ID' => $usuario->USUARIO_ID])->get();
        $pedidos = Pedido::where('STATUS_ID', '<>', 1)
            ->where(['USUARIO_ID' => $usuario->USUARIO_ID])
            ->orderBy('PEDIDO_ID', 'DESC')
            ->get();

        return view(
            'perfil.perfil',
            [
                'usuario' => $usuario,
                'enderecos' => $enderecos,
                'pedidos' => $pedidos,
            ]
        );
    }

    function editar(Request $request): RedirectResponse
    {
        $usuario = auth()->user();
        $usuario = Usuario::find($usuario->USUARIO_ID);

        $usuario->USUARIO_NOME = $request->nome;
        $usuario->USUARIO_EMAIL = $request->email;
        $usuario->USUARIO_CPF = $request->cpf;

        //verificar se o usuario quer mudar a senha

        if (!empty($request->senha)) {
            $usuario->USUARIO_SENHA = Hash::make($request->senha);
        }

        $usuario->save();

        return redirect('/perfil');
    }

    function buscar()
    {
        $usuario = auth()->user();

        return view('perfil.editar', ['usuario' => $usuario]);
    }

    function pedido($id)
    {
        $pedido = Pedido::find($id);
        $pedidoItens = PedidoItem::where('PEDIDO_ID', $pedido->PEDIDO_ID)
            ->where('ITEM_QTD', '>', 0)
            ->get();

        $valorTotal = 0;
        $qtdTotal = 0;

        foreach ($pedidoItens as $pedidoItem) {
            $valorTotal += $pedidoItem->ITEM_PRECO * $pedidoItem->ITEM_QTD;
            $qtdTotal += $pedidoItem->ITEM_QTD;
        }

        return view('pedido', [
            'pedido' => $pedido,
            'pedidoItens' => $pedidoItens,
            'valorTotal' => $valorTotal,
            'qtdTotal' => $qtdTotal
        ]);
    }
}
