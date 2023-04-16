<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\Usuario;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('cadastro');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        /*$request->validate([
            'USUARIO_NOME' => ['required', 'string', 'max:255'],
            'USUARIO_EMAIL' => ['required', 'string', 'email', 'max:255', 'unique:USUARIO,USUARIO_EMAIL'],
            'USUARIO_SENHA' => ['required', 'string', 'min:8', 'confirmed'],
            'USUARIO_CPF' => ['required', 'string', 'max:14', 'unique:USUARIO,USUARIO_CPF'],
        ]);*/

        $user = Usuario::create([

            'USUARIO_NOME' => $request->nome,
            'USUARIO_EMAIL' => $request->email,
            'USUARIO_SENHA' => Hash::make($request->senha),
            'USUARIO_CPF' => $request->cpf,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    
}
