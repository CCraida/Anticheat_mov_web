<?php

namespace App\Http\Controllers;
use app\Http\Common\TwiClass;
use Illuminate\Http\Request;
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

class IndexController extends Controller
{
    public function index(Request $request){

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

        return view('index.index',$param);
    }
}
