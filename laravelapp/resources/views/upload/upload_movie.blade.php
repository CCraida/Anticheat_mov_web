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
        <textarea id="explain" class="form-control" maxlength="256" rows="4" name="explain"> </textarea>
            <div class="valid-feedback">
            </div>
            <div class="invalid-feedback">
            </div>
    </div>
    <hr>
    <div class="form-group">
        <label for="cheater_name">チート使用者ID or IGN(必須)</label>
        <input type="text" id="cheater_name" class="form-control" name="cheater_name" required> 
            <div class="valid-feedback">
            </div>
            <div class="invalid-feedback">
            </div>
    </div>
    <hr>

    <label>プラットフォーム</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="platform" id="exampleRadios1" value="PC" checked>
        <lavel>PC</lavel>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="platform" id="exampleRadios1" value="CS">
        <lavel>CS</lavel>
    </div>
    <hr>

    <label>日付(遭遇日)</label>
    <div class="form-group">
        <input type="date" id="" class="form-control" name="date" required> 
    </div>

    <hr>

    <div class="form-group">
        <label for="twi_id">投稿者のTwitterID(必須)</label>
        <input type="text" id="twi_id" class="form-control" name="twi_id" required> 
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