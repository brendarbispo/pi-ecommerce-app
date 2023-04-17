<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    function create()
    {
        $usuario = auth()->user();
        $enderecos = Endereco::where(['USUARIO_ID' => $usuario->USUARIO_ID])->get();

        return view('perfil', ['usuario' => $usuario, 'enderecos' => $enderecos]);

    }
}
