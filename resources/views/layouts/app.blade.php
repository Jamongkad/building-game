<html>
    <head>
        <title>The Building</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> 
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body id="app">
        <div class="container">
            @yield('content')
        </div> 
    </body>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
