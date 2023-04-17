@extends('layouts.main')

@section('title', 'Minha conta')

@section('container')

<section class="h-100">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #3D3D3D;">
                    <div class="ms-8" style="margin-top: 40px;">
                        <p class="mb-1 fw-bold" style="font-size: 40px; padding-left: 20px">{{$usuario->USUARIO_NOME}} </p>
                    </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                </div>
                <div class="card-body p-4 text-black">
                    <div class="mb-5">
                        <p class="lead fw-normal mb-1 fw-bold">Minhas informações:</p>
                        <div class="p-4" style="background-color: #f8f9fa;">
                            <p class="font-italic mb-2">{{$usuario->USUARIO_NOME}}</p>
                            <p class="font-italic mb-1">{{$usuario->USUARIO_EMAIL}}</p>
                            <p class="font-italic mb-1">{{$usuario->USUARIO_CPF}}</p>
                            <div class="row align-items-center">
                                @foreach($enderecos as $endereco)
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ $endereco->ENDERECO_NOME}}</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">{{ $endereco->ENDERECO_LOGRADOURO}}, num {{ $endereco->ENDERECO_NUMERO}} - {{ $endereco->ENDERECO_COMPLEMENTO}}

                                                </li>

                                            </ul>
                                            <a href="{{url('/endereco/'.$endereco->ENDERECO_ID)}}" class="btn btn-outline-dark align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Editar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                <div class="col-md-3">
                                    <a href="/endereco" class="btn btn-outline-dark btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">
                                        Novo Endereco
                                        <i class="fas fa-plus" style="color:black;"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a href="{{url('/perfil/editar')}}"type="button" class="btn btn-outline-dark align-items-center" data-mdb-ripple-color="dark" style="z-index: 1;">
                                Editar informações
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0">Pedidos recentes:</p>
                        <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Pedido #00004</h5>
                                    <p class="card-text fs-" style="font-size: 12px;">Data da compra: 17/04/2023</p>
                                    <p class="card-text" style="font-size: 12px;">Status: ENTREGUE</p>
                                    <button type="button" class="btn btn-outline-dark align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Ver detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Pedido #00004</h5>
                                    <p class="card-text fs-" style="font-size: 12px;">Data da compra: 17/04/2023</p>
                                    <p class="card-text" style="font-size: 12px;">Status: ENTREGUE</p>
                                    <button type="button" class="btn btn-outline-dark align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Ver detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Pedido #00004</h5>
                                    <p class="card-text fs-" style="font-size: 12px;">Data da compra: 17/04/2023</p>
                                    <p class="card-text" style="font-size: 12px;">Status: ENTREGUE</p>
                                    <button type="button" class="btn btn-outline-dark align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Ver detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Pedido #00004</h5>
                                    <p class="card-text fs-" style="font-size: 12px;">Data da compra: 17/04/2023</p>
                                    <p class="card-text" style="font-size: 12px;">Status: ENTREGUE</p>
                                    <button type="button" class="btn btn-outline-dark align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Ver detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
