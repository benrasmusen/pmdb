@extends('layouts.app')

@section('title', $band->name)

@section('content')

	<div class="row">
		<dl class="col-sm-9">
		  <dt>@lang('Webite')</dt>
		  <dd><a href="{{ $band->website }}">{{ $band->website }}</a></dd>
		  <dt>@lang('Start Date')</dt>
		  <dd>{{ $band->start_date }}</dd>
		  <dt>@lang('Still Active')</dt>
		  <dd>
		  	@if($band->still_active == 1)
					<i class="glyphicon glyphicon-ok"></i>
				@else
					<i class="glyphicon glyphicon-remove"></i>
				@endif
		  </dd>
		</dl>

		<div class="well actions col-sm-3 pull-right">
			<a href="{{ route('bands.edit', ['band' => $band]) }}" class="btn btn-xs btn-primary">@lang('Edit')</a>
			{{ Form::open(['method' => 'DELETE', 'route' => ['bands.destroy', $band], 'class' => 'destroy-form', 'onsubmit' => 'return confirm("' . __('Are you sure you want to delete this band?') . '");']) }}
			  {{ Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) }}
			{{ Form::close() }}
		</div>
	</div>
	

	<div class="albums row">
		<div class="col-sm-12">
			<h4>@lang('Albums')</h4>

			@include('albums.list', ['albums' => $band->albums, 'hideBand' => true])
		</div>
	</div>


@endsection

