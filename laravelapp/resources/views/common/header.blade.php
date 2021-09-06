@section('header')>
        <header>
            <nav class="navbar navbar-expand-lg flex-row navbar-dark bg-dark mt-3">
                <a class="navbar-brand mr-auto" href="#">AntiCheat</a>
                
                <form class="form-inline my-2 my-lg-0" method="GET" action=" {{ url('/index')}}        ">
                    <div class="mr-4">
                        <input type="radio" name="search_figure" value="movie" checked="checked"><a class="navbar-text">動画</a>
                        <input type="radio" name="search_figure" value="tag"><a class="navbar-text">タグ</a>
                    </div>

                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="mov_search">
                    <button class="btn btn-outline-success" type="submit">動画検索</button>
                
                </form>

                <!-- ログイン時処理。ドロップダウンを表示-->
                @auth
                    <div class="dropdown ml-3">
                        <button class="btn btn-secondary dropdown-toggle"
                                type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            メニュー
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">動画アップロード</a>
                            <a class="dropdown-item" href="#!">マイリスト</a>
                        
                            <a class="dropdown-item" href={{ route('logout') }} 
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト
                            </a>
                            <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">

                                @csrf
                            </form>
                                
                        </div>
                    </div>
                <!-- 非ログイン時処理。ログインボタン、サインアップボタンを表示--> 
                @else
                <ul class="navbar-nav ml-4">
                    <li　class="nav-item">
                        <a href="/login" class="navbar-text">ログイン</a>
                    </li>
                    <li　class="nav-item">
                        <a href="/register" class="navbar-text">サインアップ</a>
                    </li>
                    </ul>
                @endauth

                </div>
            </nav>
        </header>



@show