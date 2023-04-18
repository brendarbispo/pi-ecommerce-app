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
        return view('endereco.endereco');
    }

    //criar novo endereco
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

    function editar(Request $request) : RedirectResponse
    {

        $usuario = auth()->user();
        $endereco = Endereco::where(['ENDERECO_ID'=> $request->enderecoId])
            ->where(['USUARIO_ID'=> $usuario->USUARIO_ID])->first();

        if(is_null($endereco)){
            //TODO RETORNAR ERRO
        }

        $endereco->ENDERECO_NOME = $request->nome;
        $endereco->ENDERECO_LOGRADOURO = $request->logradouro;
        $endereco->ENDERECO_NUMERO = $request->num;
        $endereco->ENDERECO_COMPLEMENTO = $request->complemento;
        $endereco->ENDERECO_CEP = $request->cep;
        $endereco->ENDERECO_CIDADE = $request->cidade;
        $endereco->ENDERECO_ESTADO = $request->estado;

        $endereco->save();

        return redirect('/perfil');

    }

    function buscar(Request $request)
    {
        $endereco = Endereco::find($request->id);

        return view('endereco.editar', ['endereco' => $endereco]);

    }

}
