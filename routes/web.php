<?php

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [
  'as' => 'home',
  'uses' => 'PagesController@home'
]);


Route::get('getregister', [
  'as' => 'getregister',
  'uses' => 'Auth\RegisterController@getRegister'
]);

Route::get('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LogoutController@logout'
]);

Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@login'
]);


Route::post('postLogin', [
  'as' => 'postLogin',
  'uses' => 'Auth\LoginController@postLogin'
]);


Route::post('postRegister', [
  'as' => 'postRegister',
  'uses' => 'Auth\RegisterController@postRegister'
]);





Route::post('postposts', [
  'as' => 'postposts',
  'uses' => 'Auth\postsController@postposts'
]);


Route::delete('postposts', [
  'as' => 'delete_post',
  'uses' => 'Auth\postsController@deletePost'
]);

Route::get('posts', [
  'as' => 'posts',
  'uses' => 'Auth\postsController@posts'
]);



Route::post('edit_post', [
  'as' => 'edit_post',
  'uses' => 'Auth\postsController@edit_post'
]);

Route::post('edit', [
  'as' => 'get_edit_post',
  'uses' => 'Auth\postsController@geteditpost'
]);



Route::get('viewpost', [
  'as' => 'viewpost',
  'uses' => 'Auth\ReplyController@viewPost'
]);


Route::post('viewpost', [
  'as' => 'viewpost',
  'uses' => 'Auth\ReplyController@viewPost'
]);


Route::post('reply', [
  'as' => 'save_reply',
  'uses' => 'Auth\ReplyController@saveReply'
]);



// Route::post('postRegister', ['as'=>'post.Register','uses'=>'Auth\RegisterController@postRegister']);
