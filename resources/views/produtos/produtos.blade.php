@extends('layouts.main')

@section('title', 'Produtos')

@section('container')
<div class="container">

    @if(count($produtos) > 0)
    <div class="row">
        <div class="col-12">
            <h2 class="text-left font-weight-normal">
                Todos os produtos
            </h2>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($produtos as $produto)
        @php
        if($produto->PRODUTO_DESCONTO > 0){
        $precodesc = $produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO;
        if($precodesc <= 0){ continue; } } @endphp <div class="col-3 my-3">
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
                    @if(isset($produto->estoque) && isset($produto->estoque->PRODUTO_QTD) && $produto->estoque->PRODUTO_QTD >= 0)
                    <a href="/carrinho/add/{{ $produto->PRODUTO_ID }}/1" class="btn btn-ver2 ">COMPRAR</a>
                    @endif
                </div>
            </div>
    </div>
    @endforeach

    @else
    <div class="row my-4">
        <div class="col-12">
            <h2 class="text-left font-weight-normal">
                Nenhum produto encontrado
            </h2>
        </div>
    </div>
    @endif
</div>

@endsection
