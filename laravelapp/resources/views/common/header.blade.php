@section('header')
        <header>
            <nav class="navbar navbar-expand-lg flex-row navbar-dark bg-dark mt-3">
                <a class="navbar-brand mr-auto" href="#">AntiCheat</a>
                
                <form class="form-inline my-2 my-lg-0">
                    <div class="mr-4">
                        <input type="radio" name="search_figure" value="movie" checked="checked"><a class="navbar-text">動画</a>
                        <input type="radio" name="search_figure" value="tag"><a class="navbar-text">タグ</a>
                    </div>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">動画検索</button>
                
                    <ul class="navbar-nav ml-4">
                        <li　class="nav-item">
                            <a class="navbar-text">検索</a>
                        </li>
                      
                        <li　class="nav-item">
                            <a class="navbar-text">ログイン</a>
                        </li>
                        <li　class="nav-item">
                            <a class="navbar-text">サインアップ</a>
                        </li>
                    </ul>
                    </form>
                </div>
            </nav>
        </header>



@show