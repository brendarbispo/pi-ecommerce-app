@extends('layouts.main')

@section('title', 'Minha conta')

@section('container')

<section class="h-100">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #abd7df;">
                    <div class="ms-8" style="margin-top: 40px;">
                        <p class="mb-1 fw-bold text-uppercase" style="font-size: 40px; padding-left: 20px; color:black;">{{$usuario->USUARIO_NOME}} </p>
                    </div>
                </div>
                <div class="card-body p-4 text-black">
                    <div class="mb-5" style="background-color: #f4f4f4;">
                        <p class="lead fw-normal mb-1 fw-bold">Minhas informações:</p>
                        <div class="p-4" >
                            <p class="font-italic mb-2">{{$usuario->USUARIO_NOME}}</p>
                            <p class="font-italic mb-1">{{$usuario->USUARIO_EMAIL}}</p>
                            <p class="font-italic mb-1">{{$usuario->USUARIO_CPF}}</p>
                            <div class="row align-items-center">
                                @foreach($enderecos as $endereco)
                                <div class="col-md-3">
                                    <div class="card card-cor">
                                        <div class="card-body card-cor">
                                            <h5 class="card-title fw-bold">{{ $endereco->ENDERECO_NOME}}</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item card-cor">{{ $endereco->ENDERECO_LOGRADOURO}}, num {{ $endereco->ENDERECO_NUMERO}} - {{ $endereco->ENDERECO_COMPLEMENTO}}
                                                </li>

                                            </ul>
                                            <a href="{{url('/endereco/editar/'.$endereco->ENDERECO_ID)}}" class="btn align-items-center btn-sm btn-ver2" style="z-index: 1;">Editar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                <div class="col-md-3">
                                    <a href="/endereco" class="btn btn-ver2 btn-sm fw-bold" style="z-index: 1;">
                                        Novo Endereço
                                        <i class="fas fa-plus" style="color:white;" ></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a href="{{url('/perfil/editar')}}" type="button" class="btn  align-items-center btn-ver2" style="z-index: 1;">
                                Editar informações
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0">Pedidos recentes:</p>

                    </div>
                    <div class="row">
                        @foreach($pedidos as $pedido)
                        <div class="col-sm-3">
                            <div class="card card-cor">
                                <div class="card-body card-cor">
                                    <h5 class="card-title fw-bold">Pedido #{{$pedido->PEDIDO_ID}}</h5>
                                    <p class="card-text fs-" style="font-size: 12px;">Data da compra:
                                        {{date('d/m/Y', strtotime($pedido->PEDIDO_DATA))}}
                                    </p>
                                    <p class="card-text" style="font-size: 12px;">Status: {{$pedido->status->STATUS_DESC}}</p>
                                    <a href="{{url('/pedido/' . $pedido->PEDIDO_ID)}}" class="btn btn-ver2 align-items-center btn-sm fw-bold" style="z-index: 1;">Ver detalhes
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection
