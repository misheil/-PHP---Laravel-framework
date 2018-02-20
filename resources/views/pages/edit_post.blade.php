
@extends('layout.master.main')

@section('page-content')

@include('layout.partial.nav')

@include('layout.partial.form_errors')

<div class="container">

    <form class="form-signin" method="post" action="{{ route('edit_post') }}">
      {{ csrf_field() }}
      <h2 class="form-signin-heading">Edit post</h2>



  <input type="hidden" value="{{$post->id}}" name="post_id"  >

      <label for="inputEmail" class="sr-only">Title</label>
      <input type="text" value="{{$post->title}}" name="inputTitle" class="form-control" placeholder="Title" required >
<br />
    <label for="Email" class="sr-only">Email address</label>
    <input type="email" name="inputEmail" value="{{ Session::get('session_email') }}" class="form-control" placeholder="Email address" required >
<br />
          <label for="selectCatagory" class="sr-only">Select catagory</label>
          <select name="selectCatagory" required>
            @foreach ($catagories as $cat)
                <option value="{{ $cat->id }}"  @if( $post->category_id == $cat->id) selected @endif > {{ $cat->name }}</option>
            @endforeach
          </select>
<br /><br />
      <label for="inputPost" class="sr-only">The Post</label>
      <textarea name="inputPost" cols="80" rows="10"  class="form-control" placeholder="Enter The Post" required>{{$post->body}}</textarea>
<br />
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="Addpost"  style="width:220px;" value="Update post" >
    </form>

  </div> <!-- /container -->
    @stop
