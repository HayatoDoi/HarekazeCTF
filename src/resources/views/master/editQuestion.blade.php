@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2>問題編集</h2>
</header>

<div class="container">
  <form action="{{ action('QuestionController@update', $qId) }}" method="POST">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="qName">問題名</label>
      <input type="text" class="form-control" name="qName" value="{{ $qName }}">
    </div>
    <div class="form-group">
      <label for="qScore">得点</label>
      <input type="text" class="form-control" name="qScore" value="{{ $qScore }}">
    </div>
    <div class="form-group">
      <label for="qFlag">フラグ</label>
      <input type="text" class="form-control" name="qFlag" value="{{ $qFlag }}">
    </div>
    <div class="form-group">
      <label for="qSentence">問題文</label>
      <textarea class="form-control" name="qSentence" rows="8" value="{{ $qSentence }}"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">更新する</button>
  </form>
</div>

<div class="container">
  <form action="{{ action('QuestionController@destroy', $qId) }}" method="POST">
  <input name="_method" type="hidden" value="DELETE">
  {{ csrf_field() }}
  <button type="submit" class="btn btn-danger">削除する</button>
</div>

</section>
@stop