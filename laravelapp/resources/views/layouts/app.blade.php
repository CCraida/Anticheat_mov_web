<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
    @include('common.header')

    <!-- 2カラムレイアウト(メインコンテンツ、サイドバー) -->
    <div class="container"></div>
        <div class="row">

        <div class="col-lg-auto d-lg-block bg-dark">
        
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