@extends('layouts.overall')
@section('title', 'Register')
@section('body')
<div class="register-box">
  <div class="register-logo">
    <a href="{{ url('/') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">{{ __('Register') }}</p>

    <form method="POST" action="{{ route('register') }}">
		@csrf
      <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
        <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		@if ($errors->has('name'))
                                    <p class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </p>
                                @endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		                        @if ($errors->has('email'))
                                    <p class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="{{ __('Password') }}" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <p class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </p>
                                @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="{{ route('login') }}" class="text-center">{{ __('I already have a membership') }}</a>
  </div>
  <!-- /.form-box -->
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