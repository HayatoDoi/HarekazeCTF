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
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        {{--  end meta  --}}

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
                <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/questions"><i class="fa fa-question-circle" aria-hidden="true"></i> Questions</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="/ranking"><i class="fa fa-table" aria-hidden="true"></i> Ranking</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="/contact"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact</a>
              </li>
              <!--start Admin only  -->
              <li class="nav-item ">
                <a class="nav-link" href="/control"><i class="fa fa-cogs" aria-hidden="true"></i> Control</a>
              </li>
              <!--end Admin only  -->
            </ul>
          </div>
        </nav>
      </header>

      @yield('content')

      <footer class="footer">
        <a href="/"><span>&copy; 2016-2017 Harekaze</span></a>
      </footer>

      <script src="{{ asset('js/jquery-3.1.1.slim.min.js') }}"></script>
      <script src="{{ asset('js/tether.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
