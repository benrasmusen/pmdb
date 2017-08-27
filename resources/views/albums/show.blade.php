@extends('layouts.app')

@section('title', $album->name)

@section('content')
	
	<div class="row">
		
		<dl class="col-sm-9">
		  <dt>@lang('Album Name')</dt>
		  <dd>{{ $album->name }}</dd>
		  <dt>@lang('Band Name')</dt>
		  <dd><a href="{{ route('bands.show', ['band' => $album->band]) }}">{{ $album->band->name }}</a></dd>
		  <dt>@lang('Recorded Date')</dt>
		  <dd>{{ $album->recorded_date }}</dd>
		  <dt>@lang('Release Date')</dt>
		  <dd>{{ $album->release_date }}</dd>
		  <dt>@lang('Number of Tracks')</dt>
		  <dd>{{ $album->number_of_tracks }}</dd>
		  <dt>@lang('Label')</dt>
		  <dd>{{ $album->label }}</dd>
		  <dt>@lang('Producer')</dt>
		  <dd>{{ $album->producer }}</dd>
		  <dt>@lang('Genre')</dt>
		  <dd>{{ $album->genre }}</dd>
		</dl>

		<div class="well actions col-sm-3">
			<a href="{{ route('albums.edit', ['album' => $album]) }}" class="btn btn-xs btn-primary">@lang('Edit')</a>
			{{ Form::open(['method' => 'DELETE', 'route' => ['albums.destroy', $album], 'class' => 'destroy-form', 'onsubmit' => 'return confirm("' . __('Are you sure you want to delete this album?') . '");']) }}
			  {{ Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) }}
			{{ Form::close() }}
		</div>

	</div>

@endsection

