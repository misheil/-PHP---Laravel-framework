<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Models\Catagory;
use DB;
use Session;
use App\http\Requests\CreatePost_sRequest;
use App\Models\Posts;

class PostsController extends Controller
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
      $this->middleware('auth',['except' => ['posts','postposts','deletePost','geteditpost','edit_post']]);
    }

    public function posts(Request $request){

      $catagories= Catagory::all();
      return view('auth.posts',compact('catagories'));

    }


    // +++++++++++++++++++++++++++++++++++++++   Add Post
    public function postPosts(CreatePost_sRequest $request)
    {
      if( $request->Addpost != ''){
              $data= array('title' => $request->inputTitle, 'email' => $request->inputEmail,'category_id' => $request->selectCatagory,'body' => $request->inputPost,'user_id' => Session::get('session_userid') );
              DB:: table('posts')->insert($data);
              notify()->flash('Post saved successfuly','success', ['timer' => 2000]);
      }

      return redirect('/');
    }
   // XX +++++++++++++++++++++++++++++++++++++++   Add Post

   // +++++++++++++++++++++++++++++++++++++++   Delete Post
   public function deletePost(Request $request)
   {
     try{
       $post=Posts::findOrFail ($request['idh']);
         if(  Session::get('session_userid')!='' &&  Session::get('session_userid')==$post->user_id )
           {
             $post->delete();
             notify()->flash('Post is deleted','success', ['timer' => 2000]);
           }
          return redirect('/');

        }
     catch(ModelNotFoundException $ex){
        return redirect('/');
        }
   }
  // XX +++++++++++++++++++++++++++++++++++++++   Add Post



  // +++++++++++++++++++++++++++++++++++++++   Edit Post
  public function geteditpost(Request $request)
  {
    try{
      $post=Posts::findOrFail ($request->post_id);
        if(  Session::get('session_userid')!='' &&  Session::get('session_userid')==$post->user_id )
          {
          $catagories = Catagory::all();
          return view('pages.edit_post',compact('catagories','post'));
          }

          }
       catch(ModelNotFoundException $ex){
       return redirect('/');
       }
  }
 // XX +++++++++++++++++++++++++++++++++++++++   Edit Post

 // +++++++++++++++++++++++++++++++++++++++   Edit Post
 public function edit_post(CreatePost_sRequest $request)
 {

try{
  $post=Posts::findOrFail ($request['post_id']);

    if(  Session::get('session_userid')!='' &&  Session::get('session_userid')==$post->user_id )
      {
        $data= array('title' => $request->inputTitle, 'email' => $request->inputEmail, 'slug' => 'aa', 'category_id' => $request->selectCatagory,'body' => $request->inputPost,'user_id' => Session::get('session_userid') );
        DB:: table('posts')-> where ('id' , $request['post_id'])->update($data);
        notify()->flash('Post updated successfuly','success', ['timer' => 2000]);
        return redirect('/');
      }

  }
catch(ModelNotFoundException $ex){
   return redirect('/');
   }
 }
// XX +++++++++++++++++++++++++++++++++++++++   Edit Post

}
