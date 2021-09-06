<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
    * ログイン後の遷移先を変更する。
    *
    * showLoginFormをオーバーライドしてsessionにurl.intendedを設定
    */
    public function showLoginForm()
    {
        //laravelの動きとして、url.intendedが定義されていたらログイン後そこに遷移、されてなかったら$redirectToに遷移
        if (!session()->has('url.intended')) {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');
    }

    /**
    * ログアウト後の遷移先を変更する。
    */
    protected function loggedOut(Request $request)
     {
         $pre_pass = url()->previous();
         return redirect($pre_pass);
    }
}
