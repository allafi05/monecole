<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('titre')</title> 
  <link href="{{url('css/style.css')}}" rel="stylesheet">
  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
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