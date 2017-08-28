@include('shared.errors')

{!! Form::model($album, ['route' => $route, 'method' => $method]) !!}
	
	<div class="form-group">
		{!! Form::label('band_id', __('Band')) !!}
		{!! Form::select('band_id', $bands, null, ['class' => 'form-control', 'placeholder' => 'Select a band...']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('name') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('recorded_date') !!}
		{!! Form::date('recorded_date', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('release_date') !!}
		{!! Form::date('release_date', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('number_of_tracks') !!}
		{!! Form::number('number_of_tracks', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('label') !!}
		{!! Form::text('label', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('producer') !!}
		{!! Form::text('producer', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('genre') !!}
		{!! Form::text('genre', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit(__('Submit'), ['class' => 'btn btn-large btn-primary']) !!}
	<a href="/" class="btn btn-large btn-danger">@lang('Cancel')</a>

{!! Form::close() !!}