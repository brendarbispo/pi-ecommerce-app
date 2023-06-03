@extends('layouts.main')

@section('title', 'Produtos')

@section('container')
<div class="container">

<div class="row">
        <div class="col-12">
            <h2 class="text-left font-weight-normal">
                Todos os produtos
            </h2>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($produtos as $produto)
        <div class="col-3 my-3">
            <div class="card zoom-2">


                @if(isset($produto->ProdutoImagem[0]))
                <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top p-3" alt="..." style="width: 284px; height:294px">
                @else
                <img src="{{'https://cdn1.staticpanvel.com.br/produtos/15/produto-sem-imagem.jpg'}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title"> {{ $produto->PRODUTO_NOME }} </h5>


                    @if($produto->PRODUTO_DESCONTO > 0)
                    <s><p class="card-text" style="font-size: 12px;">R$ {{ $produto->PRODUTO_PRECO }}</p></s>
                    <p class="card-text">R$ {{ ($produto->PRODUTO_PRECO) - ($produto->PRODUTO_DESCONTO) }}</p>
                    @else
                    <p class="card-text">R$ {{ $produto->PRODUTO_PRECO }}</p>
                    @endif


                    <a href="/produto/{{ $produto->PRODUTO_ID }}" class="btn btn-ver2 ">COMPRAR</a>
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
