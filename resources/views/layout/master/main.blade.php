<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">
    <title>Static Top Navbar Example for Bootstrap 3.3.6 Documentation - BootstrapDocs</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-static-top.css" rel="stylesheet">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <link href="css/style.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>

  <body>

@yield('page-content')


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>
<script>
    @if (notify()->ready())

       swal({
          icon: "{{ notify()->type() }}",
         title: "{!! notify()->message() !!}",
         type: "{{ notify()->type() }}",
         @if ( notify()->option('timer') )
           timer: "{{ notify()->option('timer') }}",
           showConfirmButton: false,
         @endif
         html: true
       });
     @endif
</script>
  <div align="center">
    <h5>
  &copy;  {{array_pull($generalvar, 'name2')}}
  </h5>
  </div>
</body>
</html>
