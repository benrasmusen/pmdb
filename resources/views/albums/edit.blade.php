@extends('layouts.app')

@section('title', 'Edit Album')

@section('content')
	
	@include('albums.form', ['album' => $album, 'route' => ['albums.update', $album->id], 'method' => 'PUT'])

@endsection

