<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
    .navbar.navbar-default.navbar-static-top.topbackgroud {
        background-image: url("/images/camuflagem.png");
    }
    .dropdown-toggle, .branco a, .navbar-brand{
        color: white!important;
    }
    img {
      margin-top: 49px;
      margin-left: 25px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top topbackgroud">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }} {{@Auth::user()->reserva->sigla}}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="branco"><a href="{{ url('/login') }}">Login</a></li>
                        <li class="branco"><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Militares <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/sistema/militar/criar') }}">Cadastrar</a>
                                    <a href="{{ url('/sistema/militar/listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Armamento <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/sistema/armamento/criar') }}">Cadastrar</a>
                                    <a href="{{ url('/sistema/armamento/listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Munições <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/sistema/municao/criar') }}">Cadastrar</a>
                                    <a href="{{ url('/sistema/municao/listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a id="top_a"href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Acessórios <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a  id="top_a"href="{{ url('/sistema/acessorio/criar') }}">Cadastrar</a>
                                    <a href="{{ url('/sistema/acessorio/listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Reserva Material  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/sistema/reserva/criar') }}">Cadastrar</a>
                                    <a href="{{ url('/sistema/reserva/listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Cautelas <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/sistema/militar/listar') }}">Cadastrar</a>
                                    <a href="{{ url('/sistema/cautela/listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Estoque <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/sistema/estoque/gerenciar') }}">Entrada de Itens</a>
                                    <a  href="{{ url('/sistema/estoque/listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->nome }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair!
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

@if(isset($erro))
    <div class="container">
        <div class="row col-md-8 col-md-offset-2 container">
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{$erro}}</div>
        </div>
    </div>
@endif
    @if(session('erro'))
        <div class="container">
            <div class="row col-md-8 col-md-offset-2 container">
                <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('erro')}}</div>
            </div>
        </div>
    @endif
@if(isset($mensagem))
    <div class="container">
        <div class="row col-md-8 col-md-offset-2 container">
            <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{$mensagem}}</div>
        </div>
    </div>
@endif
    @if(session('mensagem'))
        <div class="container">
            <div class="row col-md-8 col-md-offset-2 container">
                <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('mensagem')}}</div>
            </div>
        </div>
    @endif




    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
