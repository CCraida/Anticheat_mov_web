@extends('layouts.app')

@section('title','動画再生ページ')


@section('content')

<!--
    <div class = "col text-center bg-dark" style="margin-left:30px;">
-->
    <div class = "col text-center" style="margin-left:0px; margin-top:30px;">
        <!-- 動画タイトル、説明 -->
        <div class="row justify-content-start pl-4">
            <h1><b>{{$mov_info['mov_name']}}</b></h1>
            <div class="w-100"></div>
            <small>{{$mov_info['explain']}}</small>
        </div>
        <video controls playsinline autoplay muted width="1280px" height="720px">
        <source src="{{ asset('/切り取り/'.$mov_info['mov_name']) }}" type="video/mp4">
        </video>
        <!-- <div id = movie_title>
         <h2>
            {{$mov_info['mov_name']}}
         </h2>
        </div> -->

        <!-- ツイートボタン -->
        <div class="row justify-content-end mt-3 pr-4">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-lang="ja" data-show-count="false">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <hr>
    </div>
    <div style="margin-left:30px; margin-top:30px;">
    {{$mov_info['explain']}}
    </div>


    <!-- 動画プレーヤー下部のコンテンツを作成-->
    <div class="container-fluid m-4">
    <?php $i = 0 ?>

    <!-- 1行に三つのサムネを表示する-->
    <form method="post">
    @foreach($under_cont as $mov_record)

        @if (($i == 0) or ($i % 4 == 0)  )
            <div class="row">
        @endif
        <div class="mr-4 mb-4">
                <!--type="submit"のinputタグとボタンの画像となるimg タグを用意-->
               <a href="/play_movie/{{ $mov_record->id }}"><img src="{{$mov_record->thumb_dir}}" alt="サムネイル" class="img-fluid" width="300" height= "300"  >
                </a>
                <p class="text-center">{{ $mov_record['mov_name'] }}</p>
        </div>
        <?php $i++?>
        <!-- 一行の限界三つ目の表示の場合、もしくは最後のサムネの場合。 -->
        @if((($i % 4 == 0) and( $i != 0 ) ) or ( $loop->last))
            </div>
        @endif

    @endforeach
    </form>
</div>

@endsection