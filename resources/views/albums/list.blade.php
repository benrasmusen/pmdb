<table class="datatable-init table table-striped">
	<thead>
		<tr>
			@if(!isset($hideBand))
				<th class="band">@lang('Band')</th>
			@endif
			<th>@lang('Name')</th>
			<th>@lang('Recorded Date')</th>
			<th>@lang('Released Date')</th>
			<th>@lang('Tracks')</th>
			<th>@lang('Label')</th>
			<th>@lang('Producer')</th>
			<th>@lang('Genre')</th>
			<th>@lang('Actions')</th>
		</tr>
	</thead>
	@forelse($albums as $album)

		<tr>
			@if(!isset($hideBand))
				<td class="band">{{ $album->band->name }}</td>
			@endif
			<td><a href="{{ route('albums.show', ['album' => $album]) }}">{{ $album->name }}</a></td>
			<td>{{ $album->recorded_date }}</td>
			<td>{{ $album->release_date }}</td>
			<td>{{ $album->number_of_tracks }}</td>
			<td>{{ $album->label }}</td>
			<td>{{ $album->producer }}</td>
			<td>{{ $album->genre }}</td>
			<td>
				<a href="{{ route('albums.edit', ['album' => $album]) }}" class="btn btn-xs btn-primary">@lang('Edit')</a>
				{{ Form::open(['method' => 'DELETE', 'route' => ['albums.destroy', $album], 'class' => 'destroy-form', 'onsubmit' => 'return confirm("' . __('Are you sure you want to delete this album?') . '");']) }}
				  {{ Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) }}
				{{ Form::close() }}
			</td>
		</tr>
		
	@empty

		<tr>
			<td colspan="9">
				@lang('No Albums Found')
			</td>
		</tr>

	@endforelse
</table>