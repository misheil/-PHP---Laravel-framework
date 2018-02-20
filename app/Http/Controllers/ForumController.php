<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class ForumController  extends Controller
{
    public function viewPost(){
      $posts=Posts::orderBy('id','desc')->get();
      return view('pages.home',compact('posts'));
    }
}
