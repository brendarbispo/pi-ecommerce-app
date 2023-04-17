<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class EnderecoController extends Controller
{
    function endereco(){
        return view('endereco');
    }
    function criar(Request $request) : RedirectResponse
    {
        $usuario = auth()->user();
        //criacao de endereco
        $endereco = Endereco::create([
            'USUARIO_ID'=> $usuario->USUARIO_ID,
            'ENDERECO_NOME' => $request->nome,
            'ENDERECO_LOGRADOURO' => $request->logradouro,
            'ENDERECO_NUMERO' => $request->num,
            'ENDERECO_COMPLEMENTO' => $request->complemento,
            'ENDERECO_CEP' => $request->cep,
            'ENDERECO_CIDADE' => $request->cidade,
            'ENDERECO_ESTADO' => $request->estado,
        ]);

        event(new Registered($endereco));

        if(is_null($endereco)){
            //TODO criar uma exeçao endereco nao foi cadastrado
        }

        return redirect('/perfil');
    }
}
