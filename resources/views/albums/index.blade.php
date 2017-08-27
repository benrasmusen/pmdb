@extends('layouts.app')

@section('title', 'All Albums')

@section('content')

	@include('albums.list', ['albums' => $albums])

@endsection