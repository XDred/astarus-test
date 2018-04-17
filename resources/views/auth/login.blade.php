@extends('layouts.overall')
@section('title', 'Login')
@section('body')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">{{ __('Login') }}</p>

    <form action="{{ route('login') }}" method="post">
	@csrf
      <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		@if ($errors->has('email'))
        <p class="help-block">
			<strong>{{ $errors->first('email') }}</strong>
        </p>
        @endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		@if ($errors->has('password'))
        <p class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </p>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
			  <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
      </div>
    </form>

    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
    <a href="{{ route('register') }}" class="text-center">{{ __('Register a new membership') }}</a>

  </div>
</div>
@endsection
@section('scripts_after')
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(document).ready(function () {
	  $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('/plugins/iCheck/square/blue.css') }}">
@endsection