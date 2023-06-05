@extends('layouts.main')

@section('title', 'DELTA SPORTS')

@section('container')
<!-- CONTAINER PRINCIPAL-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="/produtos">
                <img src="{{ url('/img/banner-namorados.png') }}" alt="/produtos" width="1300" height="580" class="img-fluid">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-5">
                OS MAIS BUSCADOS
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3 text-center justify-content-center p-3">
            @foreach($categorias as $categoria)
            <a href="/produtos/{{$categoria->CATEGORIA_NOME}}" class="btn btn-lg m-1 rounded-pill zoom no-border categorias-home">{{$categoria->CATEGORIA_NOME}}</a>
            @endforeach
        </div>
    </div>

    <!--SEGUNDO BANNER-->

    <div class="row">
        <div class="col-12 mt-2">
            <a href="/produtos">
                <img src="{{ url('/img/banner-2.jpeg') }}" alt="/produtos" width="1300" height="580" class="img-fluid">
            </a>
        </div>
    </div>
    <!--INICIO DA AREA DE ULTIMOS PRODUTOS-->
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-5">
                ÚLTIMAS NOVIDADES
            </h2>
            <h3 class="text-center mt-2 mb-5">Produtos que acabaram de chegar para você.</h3>
        </div>
    </div>
    <!-- CARDBOX - 3 PRODUTOS-->
    <div class="row">
        @foreach($produtos as $produto)

        <div class="col-3 my-3">
            <div class="card zoom-2">

                @if(isset($produto->ProdutoImagem[0]))
                <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top p-3" alt="{{ $produto->PRODUTO_NOME }}" style="width: 250px; height:250px">
                @else
                <img src="{{'https://cdn1.staticpanvel.com.br/produtos/15/produto-sem-imagem.jpg'}}" class="card-img-top" alt="Sem Imagem" style="width: 250px; height:250px">
                @endif
                <div class="card-body">
                    <h5 class="card-title"> {{ $produto->PRODUTO_NOME }} </h5>


                    @if($produto->PRODUTO_DESCONTO > 0)
                    <s>
                        <p class="card-text" style="font-size: 12px;">R$ {{ $produto->PRODUTO_PRECO }}</p>
                    </s>
                    <p class="card-text">R$ {{ number_format(($produto->PRODUTO_PRECO) - ($produto->PRODUTO_DESCONTO), 2, ',', ''); }}</p>
                    @else
                    <p class="card-text mt-4">R$ {{ $produto->PRODUTO_PRECO }}</p>
                    @endif

                    <a href="/produto/{{ $produto->PRODUTO_ID }}" class="btn btn-ver ">Ver</a>

                    <a href="/carrinho/add/{{ $produto->PRODUTO_ID }}/1" class="btn btn-ver2 ">COMPRAR</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endsection
