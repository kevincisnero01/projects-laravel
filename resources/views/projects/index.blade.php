@extends('layout')
@section('title','Proyectos')
@section('content')
<div class="container">

	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4">Proyectos</h1>
		@auth
		<a class="btn btn-primary" href="{{ route('projects.create') }}">Crear Proyecto</a>
		@endauth
	</div>

	<p class="lead text-secondary text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</p>

	<ul class="list-group">
		@forelse($projects as $project)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="d-flex justify-content-between align-items-center text-secondary" href="{{ route('projects.show', $project) }}">
					<span class="font-weight-bold"> {{ $project->title }} </span>
					<span class="text-black-50"> {{ $project->created_at->format('d-m-Y') }} </span>
				</a>
			</li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm"> No hay elementos</li>
		@endforelse

	</ul>
</div><!--container-->
@endsection