<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delta Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />
</head>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light py-4">
      <div class="container">

          <!--CONTAINER LOGO-->
          <a class="navbar-brand" href="index.html">
              <img src="assets/img/logo_delta.jpg" alt="logo_delta" width="48" height="48" href="index.html">
          </a>
          <div class="input-group mx-10">
              <input type="text" class="form-control" placeholder="Buscar produto...">
              <button class="btn btn-outline-secondary" type="button">
                  <i class="fas fa-search"></i></button>
          </div>

          <!--FIM DA BARRA DE BOTOES/CATEGORIAS-->
          <!--INICIO DO BLOCO DE PESQUISA/CARRINHO/ENTRAR-->
          <div class="d-flex">
              <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item ms-1 me-1">

                  </li>
                  <li class="nav-item ms-1 me-1">
                      <a class="nav-link" href="carrinho.html"><i class="fas fa-bag-shopping"></i></a>
                  </li>
                  <li class="nav-item ms-1 me-1">

                      <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                          <i class="fas fa-user"></i>
                      </a>
                  </li>

              </ul>
          </div>
          <!--FIM DO BLOCO DE PESQUISA/CARRINHO/ENTRAR-->
      </div>
      </div>
  </nav>

  <!--FIM DA NAVBAR-->
  <!-- MODAL LOGIN -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="loginModalLabel">Login - DELTA STORE</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="mb-3">
                          <label for="email" class="col-form-label">Email:</label>
                          <input type="email" class="form-control" id="email">
                      </div>
                      <div class="mb-3">
                          <label for="senha" class="col-form-label">Senha:</label>
                          <input type="password" class="form-control" id="senha">
                      </div>
                      <div class="mb-3">
                          <a href="#">
                              Esqueceu sua senha?
                          </a>
                      </div>
                  </form>
              </div>
              <div class="modal-footer ">
                  <div class="mx-auto">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                      <button type="button" class="btn btn-primary">ENTRAR</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- FIM MODAL LOGIN -->