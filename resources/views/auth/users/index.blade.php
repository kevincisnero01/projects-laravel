@extends('layout')
@section('title','Proyectos')
@section('content')
<div class="container h-screen">

	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4">Usuarios</h1>
		@auth
		<a class="btn btn-brand" href="{{ route('projects.create') }}">Crear Usuario</a>
		@endauth
	</div>

	<p class="lead text-secondary text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</p>

	<ul class="list-group">
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="d-flex justify-content-between align-items-center text-secondary" href="#">
					<span class="font-weight-bold"> N°</span>
					<span class="font-weight-bold"> Nombre </span>
					<span class="font-weight-bold"> Correo </span>
					<span class="font-weight-bold"> Fecha </span>
				</a>
			</li>
		@forelse($users as $user)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="d-flex justify-content-between align-items-center text-secondary" href="{{ route('projects.show', $user) }}">
					<span class="text-black-50"> {{ $user->id }} </span>
					<span class="text-black-50"> {{ $user->name }} </span>
					<span class="text-black-50"> {{ $user->email }} </span>
					<span class="text-black-50"> {{ $user->created_at->format('d-m-Y') }} </span>
				</a>
			</li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm"> No hay elementos</li>
		@endforelse

	</ul>
</div><!--container-->
@endsection