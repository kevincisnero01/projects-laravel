@extends('layout')
@section('title','Portfolio')
@section('content')
	<h1>Home</h1>
	<p>Hello <?php echo $nombre ?? 'Invitado'; ?>, Welcome to Projects </p>
	<a href="{{ route('projects.create') }}">Crear Proyecto</a>
	<ul>
		@forelse($projects as $project)
			<li><a href="{{ route('projects.show', $project) }}"> {{ $project->title }} </a></li>
		@empty
			<li>No hay elementos</li>
		@endforelse
		{{ $projects->links() }}
	</ul>

@endsection