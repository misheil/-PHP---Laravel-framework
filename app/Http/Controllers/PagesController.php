<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PagesController extends Controller
{
    public function home(){
      $posts=Posts::orderBy('id','desc')->get();
      return view('pages.home',compact('posts'));
    }
}
