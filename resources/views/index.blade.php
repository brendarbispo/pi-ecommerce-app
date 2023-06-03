@extends('layouts.main')

@section('title', 'DELTA SPORTS')

@section('container')
<!-- CONTAINER PRINCIPAL-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="/produtos">
                <img src="{{ url('/img/banner-namorado.png') }}" alt="/produtos" width="1300" height="580" class="img-fluid">
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
            @foreach(\App\Models\Categoria::all()->take(10) as $categoria)
            <a href="/produtos/{{$categoria->CATEGORIA_NOME}}" class="btn btn-lg m-1 rounded-pill zoom no-border categorias-home">{{$categoria->CATEGORIA_NOME}}</a>
            @endforeach
        </div>
    </div>

    <!--SEGUNDO BANNER-->
    <!--
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-5">
                NOVA COLEÇÃO
            </h2>
            <h3 class="text-center mt-2 mb-5">Conheça a coleçao feminina para todo tipo de movimento.</h3>
        </div>
    </div>
    -->
    <div class="row">
        <div class="col-12 mt-2">
            <img src="{{ url('/img/banner-2.jpeg') }}" alt="/produtos" width="1300" height="580" class="img-fluid">
        </div>
    </div>
    <!--INICIO DA AREA DE ULTIMOS PRODUTOS-->
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-5">
                ULTIMAS NOVIDADES
            </h2>
            <h3 class="text-center mt-2 mb-5">Produtos que acabaram de chegar para voce.</h3>
        </div>
    </div>
    <!-- CARDBOX - 3 PRODUTOS-->
    <div class="row">
        @foreach(\App\Models\Produto::all()->take(3) as $produto)
        <div class="col-4 zoom-2" align="center">
            <a href="/produto/{{ $produto->PRODUTO_ID }}" class="card-link">
                <div class="card" style="width: 18rem;">
                    <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top p-3" alt="" style="width: 284px; height:294px">
                    <div class="card-body">
                        <h5 class="card-title card-link">{{ $produto->PRODUTO_NOME }} </h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $produto->PRODUTO_PRECO }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    @endsection
