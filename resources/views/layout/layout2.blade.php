<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('titre')</title> 
  <link href="{{url('css/style.css')}}" rel="stylesheet">
  <link href="{{url('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <style>
  body {
    font-family: 'Lato';
  }

  .fa-btn {
    margin-right: 6px;
  }
  </style>
</head>

<body>

      <div class="col-offset-md-2 col-md-8">
        <div class="content">
          <br/>
          @yield('contenu')
          <br/>
        </div>
      </divs>

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('jquery/jquery.min.js')}}"></script>
  <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{url('popper/popper.min.js')}}"></script>

</body>

</html>