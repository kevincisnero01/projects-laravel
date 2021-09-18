@extends('layout')
@section('title','Home')
@section('content')
	<h1>Home</h1>
	@auth
		<p>Hello <b>{{ Auth::user()->name }}</b>, Welcome to home</p>
	@else
		<p>Hello Invitado</p>
	@endauth
@endsection