<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Common\TwiClass;
use App\Models\movie;

//ToDo 後で消す
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
//EndToDo

class PlayMovieController extends Controller
{
    public function index(Request $request,$movie_id){

        //$movie_idでDBから動画名を取得
        $mov_info = movie::select('mov_name')->where('id','=',$movie_id)->first();
        echo $mov_info['mov_name'];

        $twi_info = TwiClass::make_timeline();
        $param =['twi_info'=> $twi_info,'mov_info'=>$mov_info];

        return view('play_movie.play_movie',$param);
    }

}
