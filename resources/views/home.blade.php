@extends('layout')
@section('title','Home')
@section('content')
	<h1>Home</h1>
	<p>Hello <?php echo $nombre ?? 'Invitado'; ?>, Welcome to home </p>
@endsection