<body>
  @extends('layouts.header')
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
                              <h1 class="fw-bold mb-0 text-black">Camiseta do Vasco</h1>
                            </div>
                            
          
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <img
                                  src="assets/img/vasco-romario.jpg"
                                  class="rounded-3" alt="Cotton T-shirt" id="imgsize">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Descrição</h3>
                            <div class="d-flex justify-content-between mb-5">
                              <meta>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore cupiditate, voluptatum atque quis, delectus sapiente quibusdam quos temporibus pariatur ipsa repellat minus exercitationem quo quidem omnis reiciendis eligendi nobis id.</meta>
                            </div>
                            <hr class="my-4">
                          
                            <!--<h5 class="text-uppercase mb-3">Entrega</h5>
          
                            <div class="mb-4 pb-2">
                              <select class="select">
                                <option value="1">Entrega comum- €5.00</option>
                                <option value="2"></option>
                                <option value="3"></option>
                                <option value="4"></option>
                              </select>
                            </div>-->
          
                            <!--<h5 class="text-uppercase mb-3">Give code</h5>
          
                            <div class="mb-5">
                              <div class="form-outline">
                                <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                              </div>
                            </div>-->
                              
                            <h8 class="text-muted">Estoque: 3</h8>

                            <div class="d-flex justify-content-between mb-4">
                                <h5>€ 132.00</h5>
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                  <i class="fas fa-minus"></i>
                                </button>
          
                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                  class="form-control form-control-sm" style="width: 50px"/>
          
                                <button class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </div>
                            <hr class="my-4">
          
                            <button type="button" class="btn btn-dark btn-block btn-lg"
                              data-mdb-ripple-color="dark">Adicionar ao carrinho</button>
          
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
    @extends('layouts.footer')
</body>