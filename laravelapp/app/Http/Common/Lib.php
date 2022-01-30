<?php
namespace app\Http\Common;
 
use Illuminate\Http\Request;

//ToDo 後で消す
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
//EndToDo

class TwiClass {
    /**
    * twitterオブジェクト作成
    *
    * 
    */
    public static function make_twi_obj(){

        //認証情報を取得
        $consumerKey = config('app.consumer_key');
        $consumerSecret = config('app.consumer_secret');
        $accessToken = config('app.access_token');
        $accessTokenSecret = config('app.access_token_secret');

        $twitter = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
    
        return ($twitter);
    }
    /**
    * タイムライン作成
    *
    * 
    */
    public static function make_timeline(){

        //認証情報を取得
        // $consumerKey = config('app.consumer_key');
        // $consumerSecret = config('app.consumer_secret');
        // $accessToken = config('app.access_token');
        // $accessTokenSecret = config('app.access_token_secret');
        // $twitter = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

        //twitterオブジェクト生成
        $twitter_obj = self::make_twi_obj();

        // ツイート検索パラメータの設定、「q」は検索文字列
        $twi_params = array(
            'q' => "#チーター #Apex",'count' =>3,'filter'=>'videos'
        );

        $twi_info = $twitter_obj->get("search/tweets", $twi_params);
        return ($twi_info);
    }
    /**
    * hideoutへのリプライ
    *
    * 
    */
    public static function reply_hideout($twitter,$text){

        //ToDo localhostではツイートにリンクがはれないっぽい。きちんとしたURLになったら試す
        $after_text = 'http://localhost:8000/play_movie/7';
        $reply_text = $text . ' ' . $after_text;
        //$after_text = 'APIを利用してツイートを投稿しました。この投稿は削除予定です。 投稿元: https://syncer.jp/Web/API/Twitter/REST_API/POST/statuses/update/';
        //$reply_text = $after_text;

        $result = $twitter->post('statuses/update',array('status' => $reply_text,'in_reply_to_status_id' => "1479049405433286660"));

        \Log::info("リプライ結果 = " . json_encode($result)); // ログ出力

        return ($result);
    }
}