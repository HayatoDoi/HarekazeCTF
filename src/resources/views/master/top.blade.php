@extends('layouts.master')
@section('content')

<section>
<header class="section-header">
{{--  todo 頭書く  --}}
<h2 id="menu"><a href="{{ action('MasterController@show') }}#menu">Menu</a></h2>
</header>
<div class="container">
<ul class="list-unstyled">
<li><a href="{{ action('QuestionController@index') }}">問題削除・編集</a></li>
<li><a href="{{ action('UserController@index') }}">ユーザ管理</a></li>
</ul>
</div>
</section>

@stop
