@extends('layouts.main')

@section('title')

@section('container')

<section class="h-100">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #3D3D3D;">
                    <div class="ms-8" style="margin-top: 40px;">
                        <p class="mb-1 fw-bold" style="font-size: 40px; padding-left: 20px">Brenda Rodrigues</p>
                    </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                </div>
                <div class="card-body p-4 text-black">
                    <div class="mb-5">
                        <p class="lead fw-normal mb-1 fw-bold">Minhas informações:</p>
                        <div class="p-4" style="background-color: #f8f9fa;">
                            <p class="font-italic mb-2">Nome</p>
                            <p class="font-italic mb-1">Sobrenome</p>
                            <p class="font-italic mb-1">11 9 7777-5555</p>
                            <p class="font-italic mb-1">usuario@email.com</p>
                            <p class="font-italic mb-1">000.000.000-01</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Endereço 1 :</h5>
                                            <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rua das gaivotas. Bairro Parelheiros, num 88 - ap 10

                                                    </li>
                                            </ul>
                                            <button type="button" class="btn btn-outline-dark align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Editar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Endereço 2 :</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Rua das gaivotas. Bairro Parelheiros, num 88 - ap 10

                                                </li>

                                            </ul>
                                            <button type="button" class="btn btn-outline-dark align-items-center btn-sm fw-bold" data-mdb-ripple-color="dark" style="z-index: 1;">Editar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <button type="button" class="btn btn-outline-dark align-items-center" data-mdb-ripple-color="dark" style="z-index: 1;">
                                Editar informações
                            </button>
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
