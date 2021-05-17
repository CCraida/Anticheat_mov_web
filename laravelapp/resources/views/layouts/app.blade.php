<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('common.header')

    <!-- 2カラムレイアウト(メインコンテンツ、サイドバー) -->
    <div class="container"></div>
        <div class="row">

        <div class="col-lg-auto d-none d-lg-block bg-dark">
                @include('common.sidevar')
<!--
                <div class="border-left" style="padding:10px;">
                    @include('common.sidevar')
                </div> <!--左ボーダー -->
            </div>
            <div class="col-lg-auto">
                @yield('content')
            </div>


        </div>
    </div>

</body>

</html>