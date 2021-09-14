<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//ここ以下のuseは後で消す
use app\Http\Common\TwiClass;
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\movie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
    * 動画投稿ページ表示
    *
    * 
    */
    public function index(Request $request){
        
        //リクエスト内から検索ワードを取り出す。
        $key_word = $request->input('mov_search','default');

        //ランダムに9件取得
        $mov_info = movie::inRandomOrder()->take(9)->get();
    
        $twi_info = TwiClass::make_timeline();
        $param =['twi_info'=> $twi_info];

        return view('upload.upload_movie');
    }

    /**
    * アップロードボタン押下時、ファイル保存処理
    *
    * 
    */
    public function upload(Request $request){
        
        //動画名を取り出す。
        $mov_name = $request['name'];

        //ファイルを保存!
        $mov_dir = "/public/movies";
        $thumb_dir = "/public/thumb";
        $path1 = $request->file('movie')->storeAs($mov_dir,$mov_name . '.mp4');
        $path2 = $request->file('thumb')->store($thumb_dir);    

        //カラムに値をセット
        $mov_db = new movie;
        $mov_db->mov_name = $mov_name . '.mp4';
        $mov_db->mov_file_dir = $mov_dir;
        $mov_db->thumb_dir = $thumb_dir;
        $mov_db->updated_by = Auth::id();
        
        //ファイル情報をDB保存
        $mov_db->save();

        return view('upload.upload_movie');
    }
}