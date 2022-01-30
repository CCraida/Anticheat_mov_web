<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Common\TwiClass;
use App\Models\movie;
use Illuminate\Support\Facades\Log;

//ToDo 後で消す
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
//EndToDo

class PlayMovieController extends Controller
{
    public function index(Request $request,$movie_id){

        //$movie_idでDBから動画名を取得
        $mov_info = movie::select('mov_name','explain')->where('id','=',$movie_id)->first();
        Log::debug('ログメッセージ' . $mov_info);
        Log::info(" = " . json_encode($mov_info)); // ログ出力

        //サイドバー
        $twi_info = TwiClass::make_timeline();

        //画面下コンテンツ ToDo再生する動画をのぞいて取得するようにする
        $under_cont = movie::inRandomOrder()->take(9)->get();

        $param =['twi_info'=> $twi_info,'mov_info'=>$mov_info,'under_cont'=>$under_cont];

        return view('play_movie.play_movie',$param);
    }

}
