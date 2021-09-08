@extends('layout')
@section('title','Portfolio')
@section('content')
<h1>Crear Proyecto</h1>

@if($errors->any())
	<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif

<form action="{{ route('projects.store') }}" method='POST'>
	@csrf
	<label>Titulo</label><br>
	<input type="text" name="title" ><br>
	<label>URL</label><br>
	<input type="text" name="url" ><br>
	<label>Descripcion</label><br>
	<input type="text" name="description" ><br>
	<button>Guaradar</button>
</form>
@endsection