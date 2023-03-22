@extends('layouts.main')

@section('title', 'Meu carrinho')

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
                              <h1 class="fw-bold mb-0 text-black">Seu carrinho</h1>
                              <h6 class="mb-0 text-muted">3 items</h6>
                            </div>
                            <hr class="my-4">
          
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                  src="{{url ('/img/vasco-romario.jpg')}}"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">Camiseta do Romário no Vasco</h6>

                              </div>

                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">R$ 44.00</h6>
                              </div>
                              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                              </div>
                            </div>
          
                            <hr class="my-4">
          
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                  src="{{url ('/img/japao-fut.jpg')}}"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">Seleção do Japão</h6>

                              </div>

                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">R$ 44,00</h6>
                              </div>
                              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                              </div>
                            </div>

          
                            <hr class="my-4">
          
                            <div class="pt-5">
                              <h6 class="mb-0"><a href="/produtos" class="text-body"><i
                                    class="fas fa-long-arrow-alt-left me-2"></i>Continuar Comprando</a></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Resumo da Compra</h3>
                            <hr class="my-4">
          
                            <div class="d-flex justify-content-between mb-4">
                              <h5 class="text-uppercase">3 items</h5>
                              <h5>R$ 132.00</h5>
                            </div>
          
                            <h5 class="text mb-3">Entrega</h5>
          
                            <div class="mb-4 pb-2">
                              <select class="select">
                                <option value="1">Entrega comum- R$5.00</option>
                                <option value="2"></option>
                                <option value="3"></option>
                                <option value="4"></option>
                              </select>
                            </div>
          
          
                            <hr class="my-4">
          
                            <div class="d-flex justify-content-between mb-5">
                              <h5 class="text-uppercase">Total da compra</h5>
                              <h5>R$ 137.00</h5>
                            </div>
          
                            <button type="button" class="btn btn-dark btn-block btn-lg"
                              data-mdb-ripple-color="dark">Avançar</button>
          
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
