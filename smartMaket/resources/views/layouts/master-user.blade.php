<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="icon" type="image/png" href="images/logo.png"/>
        {{-- Include common css --}}
        @include('common.css')
        {{-- End include common css --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    </head>

    <body class="animsition", style="opacity:1">
        @include('common.head')

        <div class="container">
            <main class="content-main">
                @yield('content')
            </main>
        </div>

        @include('common.footer')

        {{-- Include js common --}}
        @include('common.js')
        {{-- End include js common --}}
        @yield('js')
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
