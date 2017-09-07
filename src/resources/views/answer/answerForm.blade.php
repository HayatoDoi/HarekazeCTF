@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2>{{ $question->name }}</h2>
</header>

<div class="container">
  <label>{{ $question->sentence }}</label>
  <form action="{{ action('AnswerController@answer', $question->id) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="aFlag">Flag</label>
      <input type="text" class="form-control" name="aFlag" placeholder="HarekazeCTF{******************}" value="" >
    </div>
    @if( isset($isCorrect) )
      @if( $isCorrect === true )
        <p>Correct answer</p>
      @else
        <p>Incorrect answer</p>
      @endif
    @endif
    <button type="submit" class="btn btn-primary">送信</button>
  </form>
</div>
@stop
