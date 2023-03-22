@extends('layouts.main')

@section('title', 'DELTA SPORTS')

@section('container')
<div class="banner">
        <h3>
            FRETE GRATIS EM TODOS OS ESTADOS
        </h3>

    </div>
    <!-- CONTAINER PRINCIPAL-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="produto.html">
                    <img src="{{ url('/img/banner-1.jpg') }}" alt="" width="1300" height="580" class="img-fluid">
                </a>
            </div>
        </div>
        <!--SEGUNDO BANNER-->
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-5">
                    COLEÇAO MOVIMENTOS - YOGA
                </h2>
                <h3 class="text-center mt-2 mb-5">Conheça a coleçao feminina para todo tipo de movimento.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <img src="{{ url('/img/banner-2.jpg') }}" alt="" width="1300" height="580" class="img-fluid">
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
            <div class="col-4" align="center">
                <a href="#" class="card-link">
                    <div class="card" style="width: 18rem;">

                        <img src="{{ url('/img/produto1.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Bolsa Feminina</h5>
                            <h6 class="card-subtitle mb-2 text-muted">R$179,00</h6>
                            <p class="card-text">Casual</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 " align="center">
                <a href="#" class="card-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('/img/produto2.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Air Jordan 4</h5>
                            <h6 class="card-subtitle mb-2 text-muted">R$1799,00</h6>
                            <p class="card-text">Tenis Casual</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 " align="center">
                <a href="#" class="card-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('/img/produto3.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Shorts Nike Feminino</h5>
                            <h6 class="card-subtitle mb-2 text-muted">R$139,00</h6>
                            <p class="card-text"> Shorts simples</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

@endsection
