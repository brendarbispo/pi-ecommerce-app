@extends('layouts.main')

@section('title', $produto->PRODUTO_NOME)

@section('container')
<div class="container">
    <section class="h-100 h-custom justify-content-center" style="background-color: white;">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 ">
                    <div class="card justify-content-center d-flex  card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">{{$produto->PRODUTO_NOME}}</h1>
                                        </div>
                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-3 col-lg-3 col-xl-3">

                                                @if(isset($produto->ProdutoImagem[0]))
                                                <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="imgProduto" alt="{{$produto->PRODUTO_NOME}}">
                                                @else
                                                <img src="{{'https://cdn1.staticpanvel.com.br/produtos/15/produto-sem-imagem.jpg'}}" class="imgProduto" alt="imagem nao encontrada">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Descrição</h3>
                                        <div class="d-flex justify-content-between mb-5">
                                            <meta>{{$produto->PRODUTO_DESC}}</meta>
                                        </div>
                                        <hr class="my-4">
                                        @if(isset($produto->estoque->PRODUTO_QTD)&& $produto->estoque->PRODUTO_QTD > 0)
                                        <h8 class="text-muted">Estoque: {{$produto->estoque->PRODUTO_QTD}}</h8>
                                        @else
                                        <h8 class="text-muted">Estoque: SEM ESTOQUE NO MOMENTO</h8>
                                        @endif
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5>{{$produto->PRODUTO_PRECO}}</h5>
                                        </div>
                                        @if(isset($produto->estoque->PRODUTO_QTD) && $produto->estoque->PRODUTO_QTD > 0)
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                            <hr class="my-4">

                                            <h8 class="text">Escolha a qtd:</h8>

                                            <input min="0" name="quantity" value="1" type="number" class="form-control " style="width: 80px" />
                                        </div>
                                        @endif
                                        <hr class="my-4">
                                        @if(isset($produto->estoque->PRODUTO_QTD)&& $produto->estoque->PRODUTO_QTD > 0)
                                        <a class="btn btn-dark btn-block btn-lg" href="{{url('/carrinho/add/'. $produto->PRODUTO_ID . '/'. 1)}}" data-mdb-ripple-color="dark">Adicionar ao carrinho</a>
                                        @else
                                        <a class="btn btn-dark btn-block btn-lg" href="#" data-mdb-ripple-color="dark">ESGOTADO</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
