@extends('layouts.master')
@section('content')

<section class="jumbotron text-center">
  <div class="container">
    <a href="https://twitter.com/TeamHarekaze"><img src="{{ asset('img/favicon.png') }}"></a>
    <h1 class="jumbotron-heading">Team:Harekaze</h1>
    <p class="lead text-muted">"In a crisis on CTF!"</p>
  </div>
</section>

<section>
  <header class="section-header">
    <h2 id="rule"><a href="#Rule">Rule</a></h2>
  </header>
  <div class="container">
    <p>ぼくたちのCTFに参加する場合は次のルールを守ってね。</p>
    <p>守らないと、おちんちん引っこ抜くぞ <i class="fa fa-heart" aria-hidden="true" style="color:#EF75BC"></i></p>
    <ul type="disc">
      <li>他のプレイヤーへの妨害行為</li>
      <li>他のプレイヤーの回答などをのぞき見する行為</li>
      <li>他のプレイヤーに問題・ヒント・解答を教えること</li>
      <li>他のプレイヤーからヒント・解答を得ること</li>
      <li>設問によって攻撃が許可されているサーバ、ネットワーク以外への攻撃</li>
      <li>その他、運営を阻害する行為</li>
    </ul>
  </div>
</section>

@stop
