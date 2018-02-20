
@extends('layout.master.main')

@section('page-content')

@include('layout.partial.nav')
@include('layout.partial.form_errors')
<div class="container">

    <form class="form-signin" method="POST" action="{{ route('postRegister') }}">
      {{ csrf_field() }}
      <h2 class="form-signin-heading">Please sign in

        {{Session::get('sess')}}

        <?php
        if($data!=''){
        if (is_array($data) && array_key_exists('name', $data))
            {
        ?>
              {{array_pull($data, 'name')}}
        <?php

            }
            }
        ?>
        <!--  -->
        </h2>
      <label for="inputName" class="sr-only">Full Name</label>
      <input type="name" name="inputName" class="form-control" placeholder="Full Name" required autofocus>
<br />
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="Email" class="form-control" placeholder="Email address" required >
<br />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
<br />
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="Adduser"  style="width:120px;" value="Add User" >
    </form>

  </div> <!-- /container -->
    @stop
