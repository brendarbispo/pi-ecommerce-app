@extends('layouts.main')

@section('title', 'Produtos')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($produtos as $produto)
        <div class="col-3 my-3">
            <div class="card">
                @if(isset($produto->ProdutoImagem[0]))
                <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="..." style="width: 284px; height:294px">
                @else
                <img src="{{'https://cdn1.staticpanvel.com.br/produtos/15/produto-sem-imagem.jpg'}}" class="card-img-top" alt="...">
                @endif
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
