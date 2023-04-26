@extends('layouts.main')

@section('title', 'Editar infos')

@section('container')

<section class="h-100">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="card">
                <form method="post" action="{{url('/perfil/editar')}}">
                    @csrf
                    <div class="form-row card-body">
                        <label for="nome">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="nome" value="{{$usuario->USUARIO_NOME}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$usuario->USUARIO_EMAIL}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="{{$usuario->USUARIO_CPF}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="********">
                    </div>


                    <div class="form-row text-center ">
                        <button type="submit" class="btn btn-outline-dark mb-2 align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection
