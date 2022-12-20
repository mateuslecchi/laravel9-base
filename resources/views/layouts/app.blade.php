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

<body class="sb-nav-fixed">
    @include('layouts.top-navigation')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts.sb-navigation')
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    {{ $header }}

                    {{ $slot }}

                </div>
            </main>

            @include('layouts.footer')
        </div>
    </div>
</body>

</html>