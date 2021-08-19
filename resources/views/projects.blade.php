@extends('layout')
@section('title','Portfolio')
@section('content')
	<h1>Home</h1>
	<p>Hello <?php echo $nombre ?? 'Invitado'; ?>, Welcome to Projects </p>

	<ul>
		@forelse($projects as $project)
			<li>{{ $project->title }}</li>
		@empty
			<li>No hay elementos</li>
		@endforelse
		{{ $projects->links() }}
	</ul>

@endsection