@extends('layouts.master')
@section('content')

<section>
  <div class="container mt-5 mb-5">
    <!-- Jumbotron -->
    <div class="jumbotron alert alert-danger">
      <h1><i class="fa fa-frown-o"></i> 404</h1>
      <h3 class="mt-3 mb-5">We couldn't find what you're looking for on.</h3>
      <a href="/" class="btn btn-primary">Go top</a>
    </div>
  </div>
</section>

@stop


{{--  <!DOCTYPE html>
<html lang="en">
<head>
  <title>The page you were looking for doesn't exist (404)</title>
  <style>
    * {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    html {
      height: 100%;
      background: #faf6ec;
    }
    body {
      position: relative;
      margin: 0;
      height: 100%;
      min-height: 660px;
      font-family: Verdana, "Verdana Ref", sans-serif;
      text-align: center;
      color: #949189;
    }

    .dialog {
      position: absolute;
      top: 50%;
      left: 50%;
      height: 660px;
      width: 660px;
      margin-top: -330px;
      margin-left: -330px;
      background-image: url(http://localhost:8000/img/faviconx1024.png);
      background-size:contain;
    }

    p, span, h1 {
      display: block;
      width: 300px;
      margin: 0 auto;
    }

    .number,
    .wrapper-top,
    .wrapper-bottom {
      position: absolute;
      left: 0;
      right: 0;
    }
    .wrapper-top {
      bottom: 410px;
    }
    .wrapper-bottom {
      top: 410px;
    }

    .warning {
      font-size: 20px;
      text-transform: uppercase;
      font-weight: bold;
    }

    .message {
      font-size: 24px;
      text-transform: uppercase;
      color: #66595c;
    }

    .number {
      top: 0;
      bottom: 0;
      background: url(/images/errors/404.svg) no-repeat center;
      text-indent: 100%;
      overflow: hidden;
    }

    .footer {
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      height: 180px;
      background: url(/images/errors/footer.svg) no-repeat center bottom;
    }
  </style>
  <link rel="shortcut icon" href="/favicon.ico"/>
</head>

<body>
  <!-- This file lives in public/404.html -->
  <div class="dialog">
    <div class="wrapper-top">
      <h1 class="message">This page could not be found</h1>
    </div>
    
    <!--  <span class="number">404</span>   -->
    <h1>404</h1>
    <div class="wrapper-bottom">
      <p class="warning">Do not panic</p>
      <p class="suggestion">Perhaps you misspelled the url or it has been removed.</p>
    </div>
  </div>
  <footer class="footer"></footer>
</body>
</html>  --}}
