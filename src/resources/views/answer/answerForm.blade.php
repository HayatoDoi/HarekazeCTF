@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2>{{ $question->name }}</h2>
</header>

<div class="container">
  <div class="tab-pane card">
    <markdown id="markdown" hidden>
      {{ $question->sentence }}
    </markdown>
    <div class="card-block">
      <script>
        document.write( marked( document.getElementById('markdown').innerHTML ) );
      </script>
    </div>
  </div>
</div>

<div class="container">
  @if( ( isset($isCorrect) && $isCorrect === true ) || ( isset($isAnswered) && $isAnswered === true ))
    <div class="alert alert-success" role="alert">Correct answer</div>
  @elseif( isset($isCorrect) )
    <div class="alert alert-danger" role="alert">Incorrect answer</div>
  @endif
</div>

<div class="container">
  @if( isset($isAnswered) && $isAnswered === true )
    <form class="form-inline" action="{{ action('AnswerController@answer', $question->id) }}" method="POST" onsubmit="return false;">
  @else
    <form class="form-inline" action="{{ action('AnswerController@answer', $question->id) }}" method="POST">
  @endif
    {{ csrf_field() }}
    <div class="form-group">
      <input type="text" class="form-control" name="aFlag" placeholder="HarekazeCTF{******************}">
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
  </form>
</div>
@stop
