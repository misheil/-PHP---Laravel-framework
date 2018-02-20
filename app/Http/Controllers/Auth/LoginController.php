<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use Session;


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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
      $request->session()->forget('sess');
      return view('auth.login');
    }


    // +++++++++++++++++++++++++++++++++++++++   Add user
    public function postLogin(Request $request)
    {

        if( $request->Loguser != ''){
          $this->validate($request, [
                'inputEmail' => 'required',
                'inputPassword' => 'required'
              ]);
$currentuserx = DB::table('users')->whereEmailAndPassword ($request->inputEmail,$request->inputPassword)->first();
       if($currentuserx) {

          $currentuser = [];
          $data = ['name' => $currentuserx->name, 'price' => 100];
          array_push($currentuser,['name' => $currentuserx->name]);
          Session::put('session_name', $currentuserx->name);
          Session::put('session_email', $currentuserx->email);
          Session::put('session_userid', $currentuserx->id);
          return redirect('/');

        }
        else {
          // throw errors;
        }
      return back();
    }
    }
    // +++++++++++++++++++++++++++++++++++++++   Add user

}
