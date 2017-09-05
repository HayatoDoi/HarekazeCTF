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
{{--  todo 頭書く  --}}
<h2 id="rule"><a href="#Rule">Rule</a></h2>
</header>
{{--  todo それっぽいルールに  --}}
<div class="container">
<p>ぼくたちのCTFに参加する場合は次のルールを守ってね。</p>
<p>守らないと、おちんちん引っこ抜くぞ♥</p>
<ul class="list-unstyled">
<li>ルール1</li>
<li>ルール2</li>
<li>ルール3</li>
<li>ルール4</li>
</ul>
</div>
</section>

@stop
