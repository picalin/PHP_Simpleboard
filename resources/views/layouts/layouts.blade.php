<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap４を使用する -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>
        
        @component('components.footer')
        @endcomponent

        <!-- Bootstrap4を使用する -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>