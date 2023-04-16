@extends('layouts.checkout')

@section('title', 'Cadastre - se')

@section('container')

    <!-- CABECALHO CADASTRO -->
    <h1 class="display-6 text-center">Torne-se um membro da Delta Store</h1>
    <!-- FIM CABECALHO CADASTRO -->
    <!-- FORMULÁRIO CADASTRO -->
    
        <div class="container p-5 d-flex justify-content-center">
          
            <form class="row g-3" method="POST" action="/cadastro">
              @csrf
                <div class="col-md-12">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Insira seu primeiro nome">
                </div>
                
                    <div class="col-md-12">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu e-mail">
                    </div>
                    <div class="col-md-12">
                      <label for="senha" class="form-label">Senha</label>
                      <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha">
                    </div>
                    
                    <div class="col-md-12">
                      <label for="cpf" class="form-label">CPF</label>
                      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="00000-000">
                    </div>
                    
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Me Cadastrar</button>
                    </div>
                </form>
        </div>
                        <!-- FIM DO FORMULÁRIO -->
            
@endsection