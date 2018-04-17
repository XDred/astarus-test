@extends('layouts.app')
@section('title', 'Search')
@section('content')
<section class="content-header">
	<h1>
        {{ __('Search') }}
	</h1>
</section>
<section class="content">
	<div class="row">        
        <div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">{{ __('List') }}</h3>
				</div>
				<div class="box-body">
					<table id="file_table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Date</th>
								<th>Title</th>
								<th>Author</th>
								<th>File</th>
							</tr>
						</thead>
						<tbody>
						@isset($records)
							@foreach($records as $record)
							<tr>
								<td>{{ $record->upload_time }}</td>
								<td>{{ $record->title }}</td>
								<td>{{ $record->username }}</td>
								<td><a href="/{{ $record->file }}"><i class="fa fa-download"></i></td>
							</tr>
							@endforeach
						@else
							<tr>
								<td colspan=4>No records</td>
							</tr>
						@endif
						</tbody>
						<tfoot>
							<tr>
								<th>Date</th>
								<th>Title</th>
								<th>Author</th>
								<th>File</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div> 
	</div>
</section>

@endsection
@section('scripts_after')
<script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
	$(function () {
		$('#file_table').DataTable({
			'paging'      : true,
			'lengthChange': true,
			'searching'   : true,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : true
		})
	})
</script>
@endsection
@section('css')
<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection