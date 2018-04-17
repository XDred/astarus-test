@extends('layouts.app')
@section('title', 'Upload')
@section('content')
<section class="content-header">
      <h1>
        {{ __('Upload a new file') }}
      </h1>
</section>
<section class="content">    
	<div class="row justify-content-center">
		<div class="col-md-12">	
		@if(isset($path))
			<div class="callout callout-success">
				<h4>{{ __('Success!') }}</h4>
				<p>{{ __('You file are saved') }}</p>
			</div>
		@endif
		@if(isset($error))
			<div class="callout callout-danger">
				<h4>{{ __('Error!') }}</h4>
				<p>{{ $error }}</p>
			</div>
		@endif
		@if ($errors->any())
		@foreach ($errors->all() as $error)
                <div class="callout callout-danger">
				<h4>{{ __('Error!') }}</h4>
				<p>{{ $error }}</p>
			</div>
        @endforeach
		@endif
          <div class="box box-primary">
            <form enctype="multipart/form-data" action="{{ route('upload') }}" method="post">
			@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">{{ __('Title') }}</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ __('Enter title') }}" name="title" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">{{ __('File input') }}</label>
                  <input type="file" id="exampleInputFile" name="file">

                  <p class="help-block">{{ __('Not all formats are accepted.') }}</p>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
              </div>
            </form>
          </div>
		</div>
    </div>
</section>
@endsection
