@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2>問題一覧</h2>
</header>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>問題名</th>
      <th>得点</th>
      <th>作成者</th>
      <th>ジャンル</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($questions as $question)
      <tr>
        <th><a href="#">{{ $question->name }}</a></th>
        <td scope="row">{{ $question->score }}</td>
        <td>{{ $question->author_name }}</td>
      </tr>
    @endforeach

  </tbody>
</table>
</div>
@stop
