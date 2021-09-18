@extends('layout')
@section('title','Home')
@section('content')
	<h1>Inicio</h1>
	@auth
		<p>Hola <b>{{ Auth::user()->name }}</b></p>
	@else
		<p>Hola Invitado</p>
	@endauth
@endsection