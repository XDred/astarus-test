@extends('layouts.app')
@section('content')
<div class="content">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="callout callout-success">
				<h4>Registration Confirmed</h4>
				<p>
					Your Email is successfully verified. Click here to <a href="{{url('/login')}}">login</a>
				</p>
			</div>
		</div>
	</div>
</div>
@endsection