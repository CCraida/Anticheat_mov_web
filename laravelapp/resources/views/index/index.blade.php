@extends('layouts.app')

@section('title','Index')


@section('content')
<!--
    <div style="margin-left:50px;">
    <h1>ABCD</h1>
    </div>
-->

<div class="container">
    <?php $i = 0 ?>

    <!-- 1行に三つのサムネを表示する-->
    @foreach($mov_info as $mov_record)

        @if (($i == 0) or ($i % 3 == 0)  )
            <div class="row">
        @endif
        <div>
            <form method="post">
                <!--type="submit"のinputタグとボタンの画像となるimg タグを用意-->
               <a href="/play_movie/{{ $mov_record->id }}"><img src="{{$mov_record->thumb_dir}}" alt="サムネイル" class="img-fluid" width="300" height= "300"  >
                </a>
                <p class="text-center">ここにタイトルです</p>
            </form>
<!--
            <a href="test">
                <img src="{{$mov_record->thumb_dir}}" alt="サムネイル" class="img-fluid" width="300" height= "300"  >
            <a>
            <p class="text-center">ここにタイトルです</p>
-->

        </div>
        <?php $i++?>
        <!-- 一行の限界三つ目の表示の場合、もしくは最後のサムネの場合。 -->
        @if((($i % 3 == 0) and( $i != 0 ) ) or ( $loop->last))
            </div>
        @endif

    @endforeach
</div>
@endsection

