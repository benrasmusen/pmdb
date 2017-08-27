@extends('layouts.app')

@section('title', 'All Bands')

@section('content')

	<table class="datatable-init table table-striped">
		<thead>
			<tr>
				<th>@lang('Name')</th>
				<th>@lang('Start Date')</th>
				<th>@lang('Still Active?')</th>
				<th>@lang('Actions')</th>
			</tr>
		</thead>
		@forelse($bands as $band)

			<tr>
				<td><a href="{{ route('bands.show', ['band' => $band]) }}">{{ $band->name }}</a></td>
				<td>{{ $band->start_date }}</td>
				<td>
					<span class="sr-only">{{ $band->still_active }}</span>
					@if($band->still_active == 1)
						<i class="glyphicon glyphicon-ok"></i>
					@else
						<i class="glyphicon glyphicon-remove"></i>
					@endif
				</td>
				<td>
					<a href="{{ route('bands.edit', ['band' => $band]) }}" class="btn btn-xs btn-primary">@lang('Edit')</a>
					{{ Form::open(['method' => 'DELETE', 'route' => ['bands.destroy', $band], 'class' => 'destroy-form', 'onsubmit' => 'return confirm("' . __('Are you sure you want to delete this band?') . '");']) }}
					  {{ Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) }}
					{{ Form::close() }}
				</td>
			</tr>
			
		@empty

			<tr>
				<td colspan="4">
					@lang('No Bands Found')
				</td>
			</tr>

		@endforelse
	</table>

@endsection