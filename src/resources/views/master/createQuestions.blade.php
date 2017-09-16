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
    <div class="m-t-1 m-l-1 m-r-1" id="editor">
      <!--タブのボタン部分-->
      <ul class="nav nav-tabs" id="editor" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#markdown" role="tab" aria-controls="markdown">markdown</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#preview" role="tab" aria-controls="preview">preview</a>
        </li>
      </ul>
      <!--タブのコンテンツ部分-->
      <div class="tab-content">
        <div id="markdown" class="tab-pane active">
          <textarea id="md-text" class="form-control" name="qSentence" rows="8"></textarea>
        </div>
        <div id="preview" class="tab-pane card">
          <div id="md-preview" class="card-block"></div>
        </div>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">作成</button>
</form>

</div>
</section>
@stop