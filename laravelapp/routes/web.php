<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlayMovieController;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('index','IndexController@index');
Route::get('index',  [IndexController::class, 'index']);
//Route::get('play_movie',  [PlayMovieController::class, 'index']);

//movie_idは数字以外禁止にwhereでする。
Route::get('play_movie/{movie_id}',  [PlayMovieController::class, 'index'])->where('member_id', '[0-9]+');

//ファイルアップロードページ(ログイン済みの場合のみ遷移)
Route::get('upload',  [UploadController::class, 'index'])->middleware('auth');
Route::post('upload',[UploadController::class, 'upload']);
Route::post('upload/confirmed',[UploadController::class, 'upload_confirmed']);


//認証関係
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
