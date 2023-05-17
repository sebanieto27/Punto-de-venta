<!DOCTYPE html>
<html lang="es" class="light">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/favicoin.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de ventas web touchscreen para restaurantes y negocios de comida rápida">
    <meta name="keywords" content="ventas,sistema,web,envío,comida,restaurante,ordenes,express,pantalla,táctil">
    <meta name="author" content="luisfax.com">

    <title>Buela POS</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/snackbar.min.css') }}" />
    <script src="{{ asset('js/kioskboard-aio-2.0.0.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/mc-calendar.min.css') }}">
    <script src="{{ asset('js/mc-calendar.min.js') }}"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/apexcharts.css') }}" />
    <script src="{{ asset('js/apexcharts.js') }}"></script>

    <style>
        .image-fit>img {
            object-fit: contain !important;
        }

        nav p {
            display: none !important;
        }
    </style>

    <livewire:styles />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
    <div class="flex">
        <div class="content">
            {{ $slot }}
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="{{ asset('js/snackbar.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/alpine.js') }}" defer></script>

    @livewireScripts
    <!-- END: JS Assets-->
</body>

</html>
