@extends('layouts.upload')

@section('title','動画再生ページ')


@section('content')
<div class="container">
<h1>動画のアップロード</h1>
<form class="was-validated" method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="movie_name">動画名(必須)</label>
        <input type="text" id="movie_name" class="form-control" name="name" required> 
            <div class="valid-feedback">
            </div>
            <div class="invalid-feedback">
            </div>
    </div>
    <hr>
    <div class="form-group">
        <label for="explain">動画説明文(任意)</label>
        <textarea id="explain" class="form-control" maxlength="256" rows="4" required> </textarea>
            <div class="valid-feedback">
            </div>
            <div class="invalid-feedback">
            </div>
    </div>
    <hr>

    <div class="form-group">
        <label>ファイル</label><br>
        <input type="file" id="file" name="movie" lass="form-control">
    </div>
    <hr>
    <div class="form-group">
        <label>サムネイル</label><br>
        <input type="file" id="file" name="thumb" lass="form-control">
    </div>
    <hr>
    <button type="submit" class="bg-primary"><b>アップロード</b></button>
</form>
    <a href="/index"><button>キャンセル</button></a>

</div>

@endsection