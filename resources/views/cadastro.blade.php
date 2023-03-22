@extends('layouts.checkout')

@section('title', 'Cadastre - se')

@section('container')

    <!-- CABECALHO CADASTRO -->
    <h1 class="display-6 text-center">Torne-se um membro da Delta Store</h1>
    <!-- FIM CABECALHO CADASTRO -->
    <!-- FORMULÁRIO CADASTRO -->
    
        <div class="container p-5 d-flex justify-content-center">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="input-group" class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Insira seu primeiro nome">
                </div>
                <div class="col-md-6">
                    <label for="input-group" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" placeholder="Insira seu último nome">
                </div>
                
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">E-mail</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Insira seu e-mail">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Senha</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="Insira sua senha">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Endereço</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="Rua,Avenida e etc...">
                    </div>
                    <div class="col-md-6">
                      <label for="inputAddress2" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, casa e etc...">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Insira sua cidade">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Estado</label>
                      <select id="inputState" class="form-select">
                        <option selected>Escolher...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="inputZip" placeholder="00000-000">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Quero receber e-mails sobre as novidades da Delta Sports
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Me Cadastrar</button>
                    </div>
                </form>
                        <!-- FIM DO FORMULÁRIO -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

@endsection