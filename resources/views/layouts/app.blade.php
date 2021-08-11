<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter">
    <div id="app">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <div class="col-md-10">
                    <h2 class="link-danger">Hudson Join Teste</h2>                   
                </div>

                <div class="col-md-2 navbar-expand" >
                    <ul class="navbar-text navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('produto.index') }}">Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categoria.index') }}">Categoria</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>

        <main class="container mx-auto py-6 section">
            @yield('content')
        </main>
    </div>
</body>
</html>

  