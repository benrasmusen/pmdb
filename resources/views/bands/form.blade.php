@include('shared.errors')

{!! Form::model($band, ['route' => $route, 'method' => $method]) !!}
	
	<div class="form-group">
		{!! Form::label('name') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('start_date') !!}
		{!! Form::date('start_date', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('still_active') !!}
		{!! Form::hidden('still_active', 0) !!}
		{!! Form::checkbox('still_active') !!}
	</div>

	{!! Form::submit(__('Submit'), ['class' => 'btn btn-large btn-primary']) !!}
	<a href="/" class="btn btn-large btn-danger">@lang('Cancel')</a>

{!! Form::close() !!}