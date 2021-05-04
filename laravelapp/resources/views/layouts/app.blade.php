<html>
<head>
    <title>@yield('title')</title>
</head>

<body>
    @include('common.header')
    @include('common.sidevar')

    @yield('content')

</body>

</html>