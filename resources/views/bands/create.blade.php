@extends('layouts.app')

@section('title', 'Create Band')

@section('content')
	
	@include('bands.form', ['band' => $band, 'route' => ['bands.store'], 'method' => 'POST'])

@endsection