@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

<header class="section-header">
    <h2>Register</h2>
</header>

<div class = "container">
    <div class="wrapper">
        <form method="POST" action="{{ route('register') }}" class="form-signin">
            {{ csrf_field() }}
            <h3 class="form-signin-heading">Welcome to HarekazeCTF</h3>
            <hr class="colorgraph"><br>

            <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                @if ($errors->has('name'))
                    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                @endif
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                @if ($errors->has('email'))
                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
                @if ($errors->has('password'))
                    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autofocus>
            </div>

            <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>

        </form>
    </div>
</div>
@endsection
