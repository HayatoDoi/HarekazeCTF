<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        {{--  meta  --}}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Harekaze is a Japanese Capture The Flag (CTF) team.">
        <meta name="author" content="Team:Harekaze">
        {{--  todo link change  --}}
        <link rel="canonical" href="https://harekaze.com">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Team:Harekaze">
        {{--  todo link change  --}}
        <meta property="og:url" content="https://harekaze.com">
        <meta property="og:image" content="{{ asset('img/favicon.png') }}">
        <meta property="og:site_name" content="Harekaze">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@TeamHarekaze">
        <meta name="twitter:title" content="Team:Harekaze">
        <meta name="twitter:description" content="Harekaze is a Japanese Capture The Flag (CTF) team.">
        <meta name="twitter:image" content="{{ asset('img/favicon.png') }}">

        <title>HarekazeCTF</title>
        <link rel="icon" href="{{ asset('img/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        {{--  end meta  --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js"></script>
        <!-- Fonts -->

        <!-- Styles -->
    </head>
    <body>
      <!-- header -->
      <header class="navbar navbar-expand-lg navbar-toggleable-md navbar-light bg-faded">
        <nav class="container">
          <a class="navbar-brand" href="/"><img src="{{ asset('img/favicon.png') }}" width="30" height="30" class="d-inline-block align-top" alt="Logo">Harekaze</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ action('TopController@index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ action('AnswerController@index') }}"><i class="fa fa-question-circle" aria-hidden="true"></i> Questions</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ action('RankingController@index') }}"><i class="fa fa-table" aria-hidden="true"></i> Ranking</a>
              </li>
              {{--  <li class="nav-item ">
                <a class="nav-link" href="/contact"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact</a>
              </li>  --}}
              <!--start Admin only  -->
              @if ( !(Auth::guest()) && Auth::user()->type < 2  ) 
              <li class="nav-item ">
                <a class="nav-link" href="{{ action('MasterController@show') }}"><i class="fa fa-cogs" aria-hidden="true"></i> Control</a>
              </li>
              @endif
              <!--end Admin only  -->
              <li class="nav-item dropdown">
                @if (Auth::guest())
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                  </a>
                  <div class="dropdown-menu" aria-labelledby="Login">
                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                  </div>
                @else
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="user_name">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      <input type="button" class="button dropdown-item" value="Logout" onClick="submit(this.form);">
                    </form>
                  </div>
                @endif
              </li>
            </ul>
          </div>
        </nav>
      </header>

      @yield('content')

      <footer class="footer">
        <a href="/"><span>&copy; 2016-2017 Harekaze</span></a>
      </footer>

      {{--  <script src="{{ asset('js/jquery-3.1.1.slim.min.js') }}"></script>
      <script src="{{ asset('js/tether.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>  --}}

      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js"></script>
      <script src="{{ asset('js/markdown.preview.js') }}"></script>
    </body>
</html>
