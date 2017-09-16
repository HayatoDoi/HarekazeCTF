@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2 id="CreateQuestion"><a href="{{ action('QuestionController@create') }}#CreateQuestion">Create Question</a></h2>
</header>

<div class="container">
<p>以下の内容で登録しました。</p>
<form >
  <div class="form-group">
    <label for="qName">問題名</label>
    <p>{{ $qName }}</p>
  </div>
  <div class="form-group">
    <label for="qScore">得点</label>
    <p>{{ $qScore }}</p>
  </div>
  <div class="form-group">
    <label for="qFlag">フラグ</label>
    <p>{{ $qFlag }}</p>
  </div>
  <div class="form-group">
    <label for="qSentence">問題文</label>
    <p>{{ $qSentence }}</p>
  </div>
</form>

</div>
<div class="container">
  <a><< 一覧へ戻る</a>
</div>
</section>
@stop