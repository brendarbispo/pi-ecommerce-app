@extends('layouts.main')

@section('title', 'Pedido')

@section('container')

<!-- Carrinho de compras-->

<div class="container">
    <section class="h-100 h-custom" style="background-color: white;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Meu Pedido</h1>
                                            <h6 class="mb-0 text-muted">{{$qtdTotal}} ite{{$qtdTotal == 1 ? 'm' : 'ns' }}</h6>
                                        </div>
                                        <hr class="my-4">

                                        @if(count($pedidoItens) > 0)
                                        @foreach($pedidoItens as $pedidoItem)
                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                @if(isset($pedidoItem->ProdutoImagem[0]))
                                                <img src="{{$pedidoItem->ProdutoImagem[0]->IMAGEM_URL}}" class="img-fluid rounded-3" style="width: 200px; height:200px" alt="{{$pedidoItem->PRODUTO_NOME}}">
                                                @else
                                                <img src="{{'https://cdn1.staticpanvel.com.br/produtos/15/produto-sem-imagem.jpg'}}" height="100px" class="img-fluid rounded-3" alt="{{$pedidoItem->PRODUTO_NOME}}">
                                                @endif
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">{{$pedidoItem->Produto[0]->PRODUTO_NOME}}</h6>
                                            </div>
                                            @if($pedidoItem->Produto[0]->PRODUTO_DESCONTO > 0)
                                            <div class="col-md-1 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">De R$ <s>{{$pedidoItem->Produto[0]->PRODUTO_PRECO}}</s></h6>
                                            </div>
                                            <div class="col-md-1 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Por R$ {{$pedidoItem->Produto[0]->PRODUTO_PRECO}}</h6>
                                            </div>
                                            @else
                                            <div class="col-md-1 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Por R$ {{$pedidoItem->Produto[0]->PRODUTO_PRECO}}</h6>
                                            </div>
                                            @endif
                                        </div>
                                        @endforeach
                                        @endif
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="/produtos" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continuar comprando</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Resumo da Compra</h3>
                                        <hr class="my-4">


                                        <form action="{{url('/checkout')}}" method="post">
                                            <h5 class="text mb-3">Entrega</h5>
                                            <div class="mb-4 pb-2">
                                                <h5> * Endereco de entrega *</h5>
                                            </div>
                                            <hr class="my-4">
                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Total da compra</h5>
                                                <h5>{{$valorTotal}}</h5>
                                            </div>
                                        </form>
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

<!--FIM DO CONTAINER PRINCIPAL-->

@endsection
