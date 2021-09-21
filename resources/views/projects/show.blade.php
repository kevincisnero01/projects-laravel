@extends('layout')
@section('title','Portfolio | '.$project->title)
@section('content')
<div class="container">
<div class="row">
<div class="col-12 col-sm-10 col-lg-8 mx-auto">

<div class="bg-white p-3 shadow rounded">
	<h1 class="display-4">{{$project->title}}</h1>
	<p class="text-secundary">{{ $project->description }}</p>
	<p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>

	<div class="d-flex justify-content-between align-items-center">
		<a href="{{ route('projects.index') }}">Regresar</a>
		@auth
		<div class="btn-group btn-group">
			<a class="btn btn-brand" href="{{ route('projects.edit',$project) }}">Editar</a>
			<a class="btn btn-danger" href="#" onclick="document.getElementById('form-project').submit()">Eliminar</a>
			<form class="d-none" id="form-project" method="POST" action="{{ route('projects.destroy', $project) }}">
			@csrf @method('DELETE')
			</form>
		</div><!--.btn-group-->
		@endauth
	</div><!--.d-flex-->
</div><!--.bg-white-->

</div><!--.col-12-->
</div><!--.row-->
</div><!--.container-->
@endsection()