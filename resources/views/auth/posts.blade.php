
@extends('layout.master.main')

@section('page-content')

@include('layout.partial.nav')

@include('layout.partial.form_errors')

<div class="container">

    <form class="form-signin" method="POST" action="{{ route('postposts') }}">
      {{ csrf_field() }}
      <h2 class="form-signin-heading">Add post</h2>



      <label for="inputEmail" class="sr-only">Title</label>
      <input type="text" name="inputTitle" class="form-control" placeholder="Title" required >
<br />
    <label for="Email" class="sr-only">Email address</label>
    <input type="email" name="inputEmail" value="{{ Session::get('session_email') }}" class="form-control" placeholder="Email address" required >
<br />
          <label for="selectCatagory" class="sr-only">Select catagory</label>
          <select name="selectCatagory" required>
            @foreach ($catagories as $cat)
                <option value="{{ $cat->id }}"> {{ $cat->name }}</option>
            @endforeach
          </select>
<br /><br />
      <label for="inputPost" class="sr-only">The Post</label>
      <textarea name="inputPost" cols="80" rows="10"  class="form-control" placeholder="Enter The Post" required></textarea>
<br />
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="Addpost"  style="width:220px;" value="Save user posts" >
    </form>

  </div> <!-- /container -->
    @stop
