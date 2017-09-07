@extends('layouts.master')
@section('content')

<section>
  <header class="section-header">
    <h2>Ranking</h2>
  </header>
</section>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Name</th>
      <th>Score</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; $j=0; $swap_score=0; ?>
    @foreach ($ranking as $r)
      <?php
        $i++;
        ( $swap_score === $r->score) ? $j++ : $j=0;
        $swap_score = $r->score;
      ?>
      <tr>
        <th scope="row">{{ $i-$j }}</th>
        <td>{{ $r->name }}</td>
        <td>{{ $r->score }}</td>
      </tr>
    @endforeach

  </tbody>
</table>
</div>
@stop
