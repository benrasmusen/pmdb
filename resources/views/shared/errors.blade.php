@if ($errors->count() > 0)
	<div class="alert alert-danger" role="alert">
		<strong>@lang('There was an error with your submission.')</strong>
		<ul>
			@foreach($errors->all() as $message)
				<li>{{ $message }}</li>
			@endforeach
		</ul>
	</div>
@endif