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
	<input type="text" name="title" value="{{ old('title') }}"><br>
	<label>URL</label><br>
	<input type="text" name="url" value="{{ old('url') }}"><br>
	<label>Descripcion</label><br>
	<textarea name="description">{{ old('description') }}</textarea><br>
	<button>Guaradar</button>
</form>
@endsection