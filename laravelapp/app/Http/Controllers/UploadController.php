<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//ここ以下のuseは後で消す
use app\Http\Common\TwiClass;
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\movie;
use Illuminate\Support\Facades\Log;
class UploadController extends Controller
{
    public function index(Request $request){
        
        //リクエスト内から検索ワードを取り出す。
        $key_word = $request->input('mov_search','default');

        //ランダムに9件取得
        $mov_info = movie::inRandomOrder()->take(9)->get();
    
        $twi_info = TwiClass::make_timeline();
        $param =['twi_info'=> $twi_info];

        return view('index.index',compact('mov_info','twi_info'));
    }
}