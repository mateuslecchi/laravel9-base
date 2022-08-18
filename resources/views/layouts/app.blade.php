<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icon2.png') }}" />
    <link rel="stylesheet" href="{{ mix('node_modules/tom-select/css/tom-select.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/datatables/datatables.min.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('node_modules/tom-select/js/tom-select.complete.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables/datatables.min.js') }}"></script>
</head>

<body class="bg-light background">
    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">
            <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-light d-flex sticky-top">
                @include('layouts.navigation')
            </div>
            <div class="col d-flex flex-column h-sm-100">
                <header class="row py-3 bg-white shadow-sm border-bottom menu">
                        {{ $header }}
                </header>

                <main class="row overflow-auto">
                    <div class="col pt-4 mb-3">
                        {{ $slot }}
                    </div>
                </main>
                <footer class="row py-1 mt-auto">
                    <nav class="">
                        <h6 class="text-center ">SisController &copy; 2022</h6>
                    </nav>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>