<?php

namespace App\Http\Controllers;
use app\Http\Common\TwiClass;
use Illuminate\Http\Request;
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\movie;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function index(Request $request){
        
        //リクエスト内から検索ワードを取り出す。
        $key_word = $request->input('mov_search','default');

        //検索検索ワードであいまい検索
        //$mov_info = movie::where('mov_name','like','%'.$key_word.'%')->get();

        //ランダムに9件取得
        $mov_info = movie::inRandomOrder()->take(9)->get();
        //Log::debug('ログメッセージ');
/* Delete
        foreach ($mov_info as $flight) {
            echo $flight->mov_name;
            echo "test";
        }
        echo $key_word;
*/

/*
        foreach($twi_info->statuses as $tweet){
            echo '<p>';
            echo 'ステータスID: ' . $tweet->id . '<br>';
            echo '名前: ' . $tweet->user->name . '<br>';
            echo 'ユーザー名(screen_name): ' . $tweet->user->screen_name . '<br>';
            echo 'ツイート本文: ' . $tweet->text . '<br>';
            echo '作成日: ' . date('Y-m-d H:i:s', strtotime($tweet->created_at)) . '<br>';
            echo 'ツイート: ' . $tweet->source . '<br>';
            echo 'リツイート数: ' . $tweet->retweet_count . '<br>';
            echo 'いいね数: ' . $tweet->favorite_count;
            echo '</p>';
        }
        //print_r($statuses);
*/  
        $twi_info = TwiClass::make_timeline();
        $param =['twi_info'=> $twi_info];

        return view('index.index',compact('mov_info','twi_info'));
    }
}
