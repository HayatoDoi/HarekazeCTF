@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2 id="CreateQuestion"><a href="{{ action('QuestionController@create') }}#CreateQuestion">Create Question</a></h2>
</header>

<div class="container">

<form action="{{ action('QuestionController@store') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="qName">問題名</label>
    <input type="text" class="form-control" name="qName" value="">
  </div>
  <div class="form-group">
    <label for="qScore">得点</label>
    <input type="text" class="form-control" name="qScore" value="">
  </div>
  <div class="form-group">
    <label for="qFlag">フラグ</label>
    <input type="text" class="form-control" name="qFlag" value="">
  </div>
  <div class="form-group">
    <label for="qSentence">問題文</label>
    <textarea class="form-control" name="qSentence" rows="8" value=""></textarea>
  </div>
  <button type="submit" class="btn btn-primary">作成</button>
</form>

</div>
</section>
@stop