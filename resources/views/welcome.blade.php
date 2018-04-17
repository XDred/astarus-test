@extends('layouts.app')
@section('title', 'Main page')
@section('content')
<section class="content-header">
      <h1>
        {{ __('Main page') }}
      </h1>
</section>
<section class="content">
      <div class="row">        
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ __('About') }}</h3>
            </div>
			<div class="box-body">
            <p>{{ __('This is a test project for Astarus') }}</p>
			@guest
			<p>{{ __('To continue working with the site you must register or login') }}</p>
			@endguest
			</div>
          </div>
        </div> 
      </div>
    </section>
@endsection
