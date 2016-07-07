<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ServJobs</title>
        <meta name="description" content="@yield('description')" />
        <meta name="keywords" content="@yield('keywords')" />
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href="/bootstrap/css/bootstrap.min.css" />
        <script type='text/javascript' src="/bootstrap/js/jquery.js">  </script>
        <script type='text/javascript' src="/bootstrap/js/bootstrap.min.js">  </script>

    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav">
              <li>  <a href="#"><img src="/img/servLogo.png" width="7%" height="7%"> <img src="/img/ServJobsName.png" width="73.5px" height="17.5px"></a>
            </ul>

          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav list-auto">
              <li>  <a href="#" title="Home">Home</a>  </li>
              <li><a href="#" title="Como Funciona">Como Funciona</a></li>
              <li>  <a href="#" title="Pesquisa">Pesquisa</a></li>
              <li>  <a href="#" title="Contato">Contato</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
     @if (Auth::check())
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Ajuda</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('auth/logout')}}">Sair</a></li>
          </ul>
        </li>
     @else
              <li><a href="{{url('auth/login')}}">Login</a></li>
     @endif
            </ul>
          </div>
        </div>
      </nav>
      <div class="responsiveImage">
            <img src="/img/ServBanner4.jpg" >
          </div>
        <div class="container" style='margin-top: 50px;'>
            @yield('content')
        </div>

		    <footer id="footer">
      <ul class="icons">
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
      </ul>

      <ul class="copyright">
        <li>&copy;2016</li><li>Design: <a href="#">9Pixouls</a></li>
      </ul>
    </footer>
		
    </body>
</html>
