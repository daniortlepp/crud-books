<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Livros</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


    <!-- Styles -->
    @livewireStyles
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
  
        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
            font-family: 'Open Sans', sans-serif;
        }
        .navbar-books {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
        .content-home {
            height: calc(100vh - 60px)
        }
        #table_wrapper {
            width: 100% !important;
        }
        .imagem-do-tempo {
            margin: 0 auto;
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<!--<nav class="navbar navbar-expand-lg navbar-books flex justify-content-center">
    <div class="row col-sm-12 col-md-12 col-lg-8">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">Cadastro de Livros</a>
        
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('weather') }}">Previsão do tempo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Sair</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>-->
    
<nav class="navbar navbar-expand-lg navbar-light navbar-books flex justify-content-center">
    <div class="row col-sm-12 col-md-12 col-lg-8">
        <a class="navbar-brand" href="/home">Cadastro de Livros</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('weather') }}">Previsão do tempo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Sair</a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
  
@yield('content')
     
</body>
</html>