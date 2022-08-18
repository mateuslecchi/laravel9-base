<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icon2.png') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/tom-select/css/tom-select.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/datatables/datatables.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('node_modules/tom-select/js/tom-select.complete.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables/datatables.min.js') }}"></script>
</head>

<body class="font-sans antialiased bg-light background">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="d-flex py-3 bg-white shadow-sm border-bottom menu">
        <div class="container">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main class="container-xl my-5">
        {{ $slot }}
    </main>

    <footer class="container-xl">
        <!-- As a heading -->
        <nav class=>
            <h6 class="text-center">SisController &copy; 2022{{ date('Y') > 2022 ? '-'.date('Y'):'' }}</h6>
        </nav>
    </footer>
</body>

</html>