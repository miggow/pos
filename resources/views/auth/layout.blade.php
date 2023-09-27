<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="{{ asset('plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
        <link href="{{ asset('plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <script src="{{ asset('plugins/nprogress/nprogress.js') }}"></script>
    </head>
</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">

        <div class="d-flex flex-column justify-content-between">

            @yield('content')
        </div>

    </div>

</body>

</html>
