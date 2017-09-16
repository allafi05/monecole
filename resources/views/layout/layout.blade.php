
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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Ecole</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{ url('etudiant') }}">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="active">
            <a href="{{ url('etudiant') }}">Gérer les étudiants</a>
          </li>
          @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Se connecter</a></li>
          <li><a href="{{ url('/register') }}">S'inscrire</a></li>
          @else
          <li>
            <a href="#" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
          </li>
          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Se déconnecter</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <h1 class="my-4">Ecole</h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">Menu 1</a>
          <a href="#" class="list-group-item">Menu 2</a>
          <a href="#" class="list-group-item">Menu 3</a>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="content">
          <br/>
          @yield('contenu')
          <br/>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Onésime Allaphie 2017</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('jquery/jquery.min.js')}}"></script>
  <script src="{{url('popper/popper.min.js')}}"></script>
  <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
