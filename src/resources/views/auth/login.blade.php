@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
<header class="section-header">
    <h2>Login</h2>
</header>

<div class = "container">
    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}" class="form-signin">
            {{ csrf_field() }}
            <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
            <hr class="colorgraph"><br>
            <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                @if ($errors->has('email'))
                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember Me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </form>
    </div>
</div>

@endsection
