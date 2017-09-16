@extends('layouts.master')
@section('content')
<?php
use App\Http\Models\Questions;
?>
<header class="section-header">
<h2>問題一覧</h2>
</header>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>問題名</th>
      <th>得点</th>
      <th>作成者</th>
      <th>ジャンル</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($questions as $question)
      <tr>
        <th scope="row">{{ Questions::isAnswered(Auth::user()->id, $question->id) ? '☆' : ' '}}</th>
        <td><a href="{{ action('AnswerController@showAnswerForm', $question->id) }}">{{ $question->name }}</a></td>
        <td scope="row">{{ $question->score }}</td>
        <td>{{ $question->author_name }}</td>
      </tr>
    @endforeach

  </tbody>
</table>
</div>
@stop
