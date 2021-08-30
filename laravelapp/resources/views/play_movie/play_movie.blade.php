@extends('layouts.app')

@section('title','動画再生ページ')


@section('content')

    <div class = "col text-center bg-dark" style="margin-left:30px;">

        <!-- 動画タイトル、説明 -->
        <div class="row justify-content-start pl-4">
            <h1>動画のタイトルです</h1>
            <div class="w-100"></div>
            <h2>動画の説明文です。</h2>
        </div>
        <video controls playsinline autoplay muted width="700px" height="500px">
        <source src="{{ asset('/切り取り/'.$mov_info['mov_name']) }}" type="video/mp4">
        </video>
      
        <!-- ツイートボタン -->
        <div class="row justify-content-end mt-3 pr-4">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-lang="ja" data-show-count="false">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>

@endsection