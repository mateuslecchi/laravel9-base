<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #d6d6d6;
        }

        .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .text {
            text-align: center;
        }

        .button {
            background-color: #f274209d;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .button:hover {
            background-color: #f27420;
        }
    </style>
</head>

<body class="">
    <div class="container">
        <div class="logo">
            <x-application-logo class="logo" width="450" />
        </div>

        <div class="text">
            <h1>
                Erro: @yield('code')
            </h1>
            <h1>
                @yield('message')
            </h1>
            @auth
            <h4>
                {{ Auth::user()->name }}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                        Sair
                    </a>
                </form>
            </h4>
            @endauth
        </div>
        <div class="text">
            <a href="{{ route('dashboard') }}" class="button">Página Inicial</a>
        </div>
    </div>
</body>

</html>