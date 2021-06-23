<?php
namespace app\Http\Common;
 
use Illuminate\Http\Request;

//ToDo 後で消す
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
//EndToDo

class TwiClass {
    public static function make_timeline(){

        //認証情報を取得
        $consumerKey = config('app.consumer_key');
        $consumerSecret = config('app.consumer_secret');
        $accessToken = config('app.access_token');
        $accessTokenSecret = config('app.access_token_secret');

        $twitter = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

        // ツイート検索パラメータの設定、「q」は検索文字列
        $twi_params = array(
            'q' => "#チーター #Apex",'count' => 5,'filter'=>'videos'
        );

        $twi_info = $twitter->get("search/tweets", $twi_params);
        return ($twi_info);
    }
}