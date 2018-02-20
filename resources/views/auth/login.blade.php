
@extends('layout.master.main')

@section('page-content')

<div class="container">
@include('layout.partial.nav')
@include('layout.partial.form_errors')



    <form class="form-signin" method="POST" action="{{ route('postLogin') }}">
      {{ csrf_field() }}
      <h2 class="form-signin-heading">Log in </h2>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required >
<br />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
<br />
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="Loguser"  style="width:120px;" value="Log in" >
    </form>

  </div> <!-- /container -->
    @stop
