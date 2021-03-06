<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/ck-editor/build/ckeditor.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <main class="pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 h-100">
                    @include('layouts.admin.sidebar')
                </div>
                <div class="col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</body>

</html>
