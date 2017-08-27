@extends('layouts.app')

@section('title', 'Edit Band')

@section('content')
	
	@include('bands.form', ['band' => $band, 'route' => ['bands.update', $band->id], 'method' => 'PUT'])

@endsection

