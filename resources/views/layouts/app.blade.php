<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@lang('Personal Music Database') - @yield('title')</title>

		<link href="/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables-bootstrap3.css" rel="stylesheet" type="text/css">
		<link href="/css/app.css" rel="stylesheet" type="text/css">

	</head>
	<body>

		<nav class="navbar navbar-inverse">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{ url('/') }}">@lang('Personal Music Database (PMDB)')</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse pull-right" id="main-nav">
		      <ul class="nav navbar-nav">
		        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">@lang('All Bands')</a></li>
						<li class="{{ Request::is('bands/create') ? 'active' : '' }}"><a href="{{ route('bands.create') }}">@lang('Create Band')</a></li>
						<li class="{{ Request::is('albums') ? 'active' : '' }}"><a href="{{ route('albums.index') }}">@lang('All Albums')</a></li>
						<li class="{{ Request::is('albums/create') ? 'active' : '' }}"><a href="{{ route('albums.create') }}">@lang('Create Album')</a></li>
		      </ul>
				</div>
		  </div>
		</nav>
		
		<div class="container">

			<div class="row">

				<div class="col-sm-12">

					@include('shared.flash_messages')

					<h2 class="page-title">@yield('title')</h2>

					@yield('content')
					
				</div>

			</div>


		</div>
		
		<script src="/js/app.js"></script>
	</body>
</html>
