@extends('layouts.main')

@section('title', 'Produtos')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($produtos as $produto)
                <div class="col-3 my-3">
                    <div class="card">
                        <img src="/img/producto1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $produto->PRODUTO_NOME }} </h5>
                            <p class="card-text"> {{ $produto->PRODUTO_PRECO }}</p>
                            <a href="/produto/{{ $produto->PRODUTO_ID }}" class="btn btn-light">Ver mais</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    <div>
        <ul class="pagination text-center justify-content-center">
            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#"> > </a></li>
        </ul>
    </div>
@endsection
