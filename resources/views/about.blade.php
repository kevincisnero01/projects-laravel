@extends('layout')
@section('title','About')
@section('content')
	<h1>Home</h1>
	<p>Hello <?php echo $nombre ?? 'Invitado'; ?>, Welcome to About </p>
@endsection