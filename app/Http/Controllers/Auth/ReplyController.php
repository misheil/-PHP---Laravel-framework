<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\http\Requests\CreateReplyRequest;
use DB;
use Session;
use App\Models\Posts;
use App\Models\reply;


class ReplyController extends Controller
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
           $this->middleware('auth',['except' => ['viewPost','saveReply']]);
     }




    public function viewPost(Request $request){

try{
  $post=Posts::where ('id','=',$request->idh) ->get();
  // $reply=Reply::where ('posts_id','=',$request->idh)->orderBy('id','desc') ->get();
  $reply=Reply::where ('posts_id','=',$request->idh)->orderBy('id','desc') ->paginate(4);
   return view('auth.reply',compact('reply'),compact('post'))->with('idh', $request->idh);

   }
catch(ModelNotFoundException $ex){
   return redirect('/');
        }
   }



       public function saveReply(CreateReplyRequest $request){
         // die("aaaaaaaaaaa");
           if( $request->Addreply != '' && $request->inputPost != ''){
       $data= array('user_id' => Session::get('session_userid'), 'posts_id' => $request->idh,'body' => $request->inputPost );
       DB:: table('replies')->insert($data);


       $post=Posts::where ('id','=',$request->idh) ->get();
         $reply=Reply::where ('posts_id','=',$request->idh)->orderBy('id','desc') ->paginate(4);
        return view('auth.reply',compact('reply'),compact('post'))->with('idh', $request->idh);

       // return redirect()->back();
         // return redirect('reply');
     }

     return redirect('/');
   }

}
