<!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top"  >
    <!-- <div class="container"> -->
      <div class="navbar-header" style="bgcolor:red">

        <a class="navbar-brand" href="#">Project name</a>
     </div>
      <div id="navbar" class="navbar-collapse collapse" >
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ route('home') }}">Home</a></li>
          <!-- <li><a href="#about">About</a></li> -->

          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if( ! Session::get('session_name') )
            <li><a href="{{ route('login') }}">Log in</a></li>
          <li><a href="{{ route('getregister') }}">Register</a></li>
          @else
          <li class="navname">Welcome {{ Session::get('session_name') }} </li>
          <li><a href="{{ route('posts') }}">Add Post</a></li>
          <li><a href="{{ route('logout') }}">Log out</a></li>



          @endif
        </ul>
      </div><!--/.nav-collapse -->

    <!-- </div> -->
  </nav>
