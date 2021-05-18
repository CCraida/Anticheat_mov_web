<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

class IndexController extends Controller
{
    public function index(Request $request){

        $consumerKey = "XXXXXXXXXXX";
        $consumerSecret = "XXXXXXXX";
        $accessToken = "XXXXXXX-XXXXXXXXXXX";
        $accessTokenSecret = "XXXXXXXXXXXX";
 
        $twitter = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

        // ツイート検索パラメータの設定、「q」は検索文字列
        $twi_params = array(
            'q' => "#チーター #Apex",'count' => 5,'filter'=>'videos'
        );

        // ツイート検索実行
//        $tweets_obj = $connection->get('search/tweets', $params);
          $twi_info = $twitter->get("search/tweets", $twi_params);

//        $statuses = $twitter->get($url, $params);

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
        $param =['twi_info'=> $twi_info];

        return view('index.index',$param);
    }
}
