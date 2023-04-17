<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />
</head>

<body>
    <!-- BARRA DE NAVEGAÇAO -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">

        <div class="container">

            <!--CONTAINER LOGO-->
            <a class="navbar-brand" href="#">
                <img src="{{url ('/img/logo.jpg')}}" alt="logo_delta" width="48" height="48">
            </a>
            <div class="input-group mx-10">
                <input type="text" class="form-control" placeholder="Buscar produto...">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search"></i></button>
            </div>

            <!--INICIO DO BLOCO DE PESQUISA/CARRINHO/ENTRAR-->
            <div class="d-flex">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item ms-1 me-1">

                    </li>
                    <li class="nav-item ms-1 me-1">
                        <a class="nav-link" href="{{url('/carrinho')}}"><i class="fas fa-bag-shopping"></i></a>
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

    </nav>

    <!-- INICIO MODAL -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
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

    @yield('container')


        <!--INICIO DO FOOTER-->
        <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">INICIO</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ROUPAS</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">SAPATOS</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">TODOS OS PRODUTOS</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">MEUS DADOS</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 DELTA STORES, Criado por Brenda Rodrigues e João Setani - TSI</p>
        </footer>
    </div>


</body>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</html>