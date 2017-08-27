@extends('layouts.app')

@section('title', 'Create Album')

@section('content')
	
	@include('albums.form', ['album' => $album, 'bands' => $bands, 'route' => ['albums.store'], 'method' => 'POST'])

@endsection