<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('common.header')
    @include('common.sidevar')

    @yield('content')

</body>

</html>