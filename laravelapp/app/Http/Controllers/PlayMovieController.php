<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Common\TwiClass;

//ToDo 後で消す
require "/Users/yoshimoritakumi/Desktop/Git_repository/anti_cheat_mov/laravelapp/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
//EndToDo

class PlayMovieController extends Controller
{
    public function index(Request $request){

        $twi_info = TwiClass::make_timeline();
        $param =['twi_info'=> $twi_info];

        return view('play_movie.play_movie',$param);
    }

}
