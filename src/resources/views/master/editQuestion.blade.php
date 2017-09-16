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
            <textarea id="md-text" class="form-control" name="qSentence" rows="8">{{ $qSentence }}</textarea>
          </div>
          <div id="preview" class="tab-pane card">
            <div id="md-preview" class="card-block"></div>
          </div>
        </div>
      </div>

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