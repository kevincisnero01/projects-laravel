@extends('layout')
@section('title','Portfolio')
@section('content')
	<h1>Home</h1>
	<p>Hello <?php echo $nombre ?? 'Invitado'; ?>, Welcome to Portfolio </p>

	<ul>
		@forelse($portfolio as $portfolioItem)
			<li>{{ $portfolioItem['title'] }} <small>{{ $loop->last ? 'Es el ultimo' : '' }}</small></li>
		@empty
			<li>No hay elementos</li>
		@endforelse
	</ul>

@endsection