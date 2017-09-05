@extends('layouts.master')
@section('content')

<section>

<header class="section-header">
<h2>ユーザの権限編集</h2>
</header>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>ユーザ名</th>
      <th>権限</th>
      <th>メールアドレス</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->name }}</th>
        <td>
          @if( $user->id === Auth::user()->id)
            <p>Owner</p>
          @else
            <form action="{{ action('UserController@update', $user->id) }}" method="POST">
              <input name="_method" type="hidden" value="PUT">
              {{ csrf_field() }}
              <div class="form-group">
                <select class="form-control" onChange="submit(this.form)" name="authority">
                  @if( $user->type === 0 )
                    <option value="0" selected>Owner</option>
                    <option value="1">Master</option>
                    <option value="2">Guest</option>
                  @endif
                  @if( $user->type === 1 )
                    <option value="0">Owner</option>
                    <option value="1" selected>Master</option>
                    <option value="2">Guest</option>
                  @endif
                  @if( $user->type === 2 )
                    <option value="0">Owner</option>
                    <option value="1">Master</option>
                    <option value="2" selected>Guest</option>
                  @endif
                </select>
              </div>
            </form>
          @endif
        </td>
        <td>{{ $user->email }}</td>
      </tr>
    @endforeach

  </tbody>
</table>
</div>

@stop
