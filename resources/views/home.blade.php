@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>
        {{ __('Home') }}
      </h1>
</section>
<section class="content">
      <div class="row">        
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ __('Dashboard') }}</h3>
            </div>
			<div class="box-body">
            {{ __('You are logged in!') }}
			</div>
          </div>
        </div> 
      </div>
    </section>
@endsection
