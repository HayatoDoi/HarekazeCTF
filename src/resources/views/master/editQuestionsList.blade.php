@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2 id="EditQuestion"><a href="{{ action('QuestionController@index') }}#EditQuestion">Edit Question</a></h2>
</header>

<div class="container">
<a class="btn btn-primary" href="{{ action('QuestionController@create') }}" role="button">新規作成</a>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th><!-- 編集 --></th>
      <th>問題名</th>
      <th>得点</th>
      <th>作成者</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($questions as $question)
      <tr>
        <th scope="row">{{ $question->id }}</th>
        @if( Auth::user()->name === $question->author_name || Auth::user()->type === 0)
          <td scope="row"><a class="btn btn-warning" href="{{ action('QuestionController@edit', $question->id)}}" role="button">編集</a></td>
        @else
          <td scope="row"><a class="btn btn-warning disabled" href="" role="button">編集</a></td>
        @endif
        <td>{{ $question->name }}</td>
        <td>{{ $question->score }}</td>
        <td>{{ $question->author_name }}</td>
      </tr>
    @endforeach

  </tbody>
</table>
</div>
</section>
{{--  アンジェちゃんかわいい  --}}
@stop
