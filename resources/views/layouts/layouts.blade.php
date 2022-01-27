<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap４を使用する -->
        <link href="{{ asset('css/app.css' }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <!-- Bootstrap4を使用する -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>