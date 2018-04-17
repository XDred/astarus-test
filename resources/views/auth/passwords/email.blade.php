@extends('layouts.overall')

@section('body')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">{{ __('Reset Password') }}</p>
	@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    <form action="{{ route('password.email') }}" method="post">
	@csrf
      <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		@if ($errors->has('email'))
        <p class="help-block">
			<strong>{{ $errors->first('email') }}</strong>
        </p>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Send Password Reset Link') }}</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

