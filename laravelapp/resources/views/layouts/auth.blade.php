<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container"></div>
        @yield('content')
    </div>
</body>

</html>