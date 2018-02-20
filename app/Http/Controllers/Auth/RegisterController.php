<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\http\Requests\CreateRegisterRequest;

class RegisterController extends Controller
{

  public function getRegister(){
    $data = ['name' => ''];
    return view('auth.register',compact('data'));
  }


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:3',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    // +++++++++++++++++++++++++++++++++++++++   Add user
    public function postRegister(CreateRegisterRequest $request)
    {

        if( $request->Adduser != ''){
                $data= array('name' => $request->inputName, 'email' => $request->Email,'password' => $request->inputPassword  );
                DB:: table('users')->insert($data);
        }
      return redirect('/');
    }
    // +++++++++++++++++++++++++++++++++++++++   Add user

}
