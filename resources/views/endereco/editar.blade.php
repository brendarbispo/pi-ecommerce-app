@extends('layouts.main')

@section('title', 'Editar endereço')

@section('container')

<section class="h-100">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="card">
                <form method="post" action="{{url('/endereco/editar')}}">
                    @csrf
                    <input type="hidden" value="{{$endereco->ENDERECO_ID}}" name="enderecoId">
                    <div class="form-row card-body">
                        <label for="nome">Nome:</label>

                        <input name="nome" type="text" class="form-control" id="nome" value="{{$endereco->ENDERECO_NOME}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Rua das gaivotas..." value="{{$endereco->ENDERECO_LOGRADOURO}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="numero">Numero</label>
                        <input type="number" class="form-control" id="numero" name="num" value="{{$endereco->ENDERECO_NUMERO}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value="{{$endereco->ENDERECO_COMPLEMENTO}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="{{$endereco->ENDERECO_CIDADE}}">
                    </div>
                    <div class="form-row card-body">
                        <label for="estado">Estado</label>
                        <select id="estado" class="form-control" name="estado">
                            <option selected value="{{$endereco->ENDERECO_ESTADO}}">{{$endereco->ENDERECO_ESTADO}}</option>
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
                    <div class="form-row card-body">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" id="inputCEP" name="cep" value="{{$endereco->ENDERECO_CEP}}">
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
