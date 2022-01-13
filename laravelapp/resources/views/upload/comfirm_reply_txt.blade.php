@extends('layouts.upload')

@section('title','リプライ内容確認ページ')


@section('content')

<div class="container">
    <h1>リプライ内容確認</h1>
    <p>内容を確認後よろしければ「リプライ実行」を、送信しない場合はキャンセルを押下してください。
    また内容に不備がある場合は編集後「リプライ実行」を押下してください
    </p>
    <form class="was-validated" method="POST" action="upload/confirmed" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="reply">投稿内容</label>
            <textarea id="reply" class="form-control" name="reply_txt" maxlength="256" rows="4">{{$twi_reply}}</textarea>
                <div class="valid-feedback">
                </div>
                <div class="invalid-feedback">
                </div>
        </div>
        <button type="submit" class="bg-primary">リプライ実行</button>
    </form>
    <a href="/index"><button>キャンセル</button></a>
</div>

@endsection