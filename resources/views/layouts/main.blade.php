<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />
    <link rel="icon" type="image/x-icon" href="{{ url('/img/icone.ico') }}">
</head>

<body>

    <div class="banner">
        <h3 class="frete">
            <b>FRETE GRÁTIS:</b> Para todo o Brasil.
        </h3>
    </div>
    <!-- BARRA DE NAVEGAÇAO -->
    <nav class="navbar navbar-expand-lg navbar-light py-4">

        <div class="container">

            <!--CONTAINER LOGO-->
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="logo" src="{{ url('/img/logoDeltaP.png') }}" alt="logo_delta">
            </a>

            <ul class="navbar-nav d-flex flex-row  justify-content-center align-items-center">
                <li class="nav-item me-3 mx-3 align-middle">
                    <a class="link-home" href="{{url('/')}}">HOME</a>
                </li>
                <li class="nav-item me-3 mx-3 align-middle">
                    <a class="link-home" href="{{url('/produtos')}}">PRODUTOS</a>
                </li>
                <li class="nav-item me-3 mx-3 align-middle">
                    <a class="link-home" style="color: red;" href="{{url('/outlet')}}">OUTLET</a>
                </li>

                <li class="nav-item me-3 ">
                    <div class="input-group my-1 buscar-campo">
                        <input type="text" class="form-control buscar no-border" id="buscar" placeholder="Buscar produto...">
                        <button class="btn bnt-primary lupa" id="lupa" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </li>
                <li class="nav-item me-3 ">
                    <a class="nav-link" href="{{url('/carrinho')}}"><i class="fas fa-bag-shopping"></i></a>
                </li>
                @if (auth()->check())

                <li class="nav-item me-3  dropdown">
                    <a class="nav-link" href="#" id="perfil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu mw-0" aria-labelledby="perfil">
                        <li><a class="dropdown-item" style="font-size: 16px" href="{{url('/perfil')}}">Perfil</a></li>
                        <li><a class="dropdown-item" style="font-size: 16px" href="{{url('/sair')}}">Sair</a></li>
                    </ul>
                </li>

                @else
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="fas fa-user"></i>
                </a>
                @endif

            </ul>
            <!--FIM DO BLOCO DE PESQUISA/CARRINHO/ENTRAR-->
        </div>

    </nav>

    <!-- INICIO MODAL -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                @if (isset($errors) && count($errors) > 0)
                <div class="modal-header ">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <div class="alert alert-danger mb-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    window.onload = function() {
                        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'), {
                            keyboard: false
                        });
                        loginModal.show();
                    };
                </script>
                @endif

                <div class="modal-body">
                    <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">LOGIN</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-cadastro-tab" data-bs-toggle="pill" data-bs-target="#pills-cadastro" type="button" role="tab" aria-controls="pills-cadastro" aria-selected="false">CADASTRO</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">

                            <form method="POST" action="/login">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>

                                <div class="mb-3">
                                    <label for="senha" class="col-form-label">Senha:</label>
                                    <input type="password" class="form-control" id="senha" name="senha">
                                </div>
                                <div class="modal-footer ">
                                    <div class="mx-auto">
                                        <button type="button" class="btn btn-ver" data-bs-dismiss="modal">Voltar</button>
                                        <button type="submmit" class="btn btn-ver2">Entrar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="pills-cadastro" role="tabpanel" aria-labelledby="pills-cadastro-tab">

                            <form method="POST" action="/cadastro">
                                @csrf

                                <div class="mb-3">
                                    <label for="nome" class="col-form-label">Nome:</label>
                                    <input type="nome" class="form-control" id="nome" name="nome">
                                </div>
                                <div class="mb-3">
                                    <label for="cpf" class="col-form-label">CPF:</label>
                                    <input type="cpf" class="form-control" id="cpf" name="cpf">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="repetir-email" class="col-form-label">Repetir email:</label>
                                    <input type="email" class="form-control" id="repetir-email" name="repetiremail">
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="col-form-label">Senha:</label>
                                    <input type="password" class="form-control" id="senha" name="senha">
                                </div>
                                <div class="mb-3">
                                    <label for="repetir-senha" class="col-form-label">Repetir Senha:</label>
                                    <input type="password" class="form-control" id="repetir-senha" name="repetirsenha">
                                </div>


                                <div class="modal-footer ">
                                    <div class="mx-auto">
                                        <button type="button" class="btn btn-ver" data-bs-dismiss="modal">Voltar</button>
                                        <button type="submmit" class="btn btn-ver2">Cadastrar</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!-- FIM MODAL -->

    @yield('container')

    <!--INICIO DO FOOTER-->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item "><a href="/" class="nav-link px-2 text-muted rodape-link">INICIO</a></li>
                <li class="nav-item"><a href="/produtos" class="nav-link px-2 text-muted rodape-link">PRODUTOS</a></li>
                <li class="nav-item"><a href="/outlet" class="nav-link px-2 text-muted rodape-link">OUTLET</a></li>
                <li class="nav-item"><a href="/perfil" class="nav-link px-2 text-muted rodape-link">MEU PERFIL</a></li>
            </ul>
            <p class="text-center text-muted rodape-link">© 2023 DELTA SPORTS, Criado por Brenda Rodrigues e João Setani - TSI</p>
        </footer>
    </div>
    <!--FIM DO FOOTER-->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="{{ url('/js/script.js') }}"></script>

</html>