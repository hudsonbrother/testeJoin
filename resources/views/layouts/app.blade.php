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
</head>
<body class="bg-grey-lighter">
    <div id="app">
        <nav class="bg-white section">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-1">
                    <h1>
                        <a class="navbar-brand" href="{{ url('/projects') }}">
                            <img src="/images/logo.svg" alt="Birdboard" class="relative" style="top: 2px">
                        </a>
                    </h1>

                    <div>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto list-reset">
                                <li class="nav-item dropdown">
                                    <a
                                        id="navbarDropdown"
                                        class="nav-link dropdown-toggle"
                                        href="#" role="button"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        v-pre
                                    >
                                        <img width="50"
                                             class="rounded-full"
                                             src="https://www.gravatar.com/avatar/email}}?s=200">
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="container mx-auto py-6 section">
            @yield('content')
        </main>
    </div>
</body>
</html>

  