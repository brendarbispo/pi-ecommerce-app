<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([ 
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->only('email');
        $senha = $request->only('senha');

        $usuario = Usuario::where('USUARIO_EMAIL', $email)->get();
        if($senha == $usuario['USUARIO_SENHA']){
            if (Auth::attempt($email)) {
                return redirect()->intended('/')->withSuccess('ok');
            }
        }

        return redirect("login")->withSuccess('nao foi possivel verificar');
    }

    public function logout() {
        Auth::logout();
        return Redirect('/');
    }
}
