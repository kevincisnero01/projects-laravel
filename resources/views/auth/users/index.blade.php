@extends('layout')
@section('title','Proyectos')
@section('content')
<div class="container h-screen">

	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4">Usuarios</h1>
		@auth
		<a class="btn btn-brand" href="#">Crear Usuario</a>
		@endauth
	</div>

	<p class="lead text-secondary text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</p>
	
	<table class="table table-hover table-light table-responsive-lg"> 
		<thead  class="text-secondary"> 
			<tr class=" shadow-sm"> 
				<th class="text-center">N°</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Registro</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody> 
			@forelse($users as $user)
			<tr class="text-black-50 shadow-sm"> 
				<td class="text-center">{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->created_at->diffForHumans() }}</td>
				<td>
					<a href="#" class="btn btn-sm">A</a>
					<a href="#" class="btn btn-sm">B</a>
				</td>
			</tr>
			@empty
			<tr class="text-black-50 shadow-sm"> 
				<td class="text-center text-danger" colspan="5">No hay elementos</td>
			</tr>
			@endforelse
		</tbody>
	</table>
</div><!--container-->
@endsection