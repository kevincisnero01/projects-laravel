@extends('layout')
@section('title','Portfolio')
@section('content')
<h1>Edicion de  Proyecto</h1>

@if($errors->any())
	<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif

<form action="{{ route('projects.update', $project) }}" method='POST'>
	@method('put')
	@csrf
	<label>Titulo</label><br>
	<input type="text" name="title" value="{{ old('title', $project->title) }}"><br>
	<label>URL</label><br>
	<input type="text" name="url" value="{{ old('url',$project->url) }}" ><br>
	<label>Descripcion</label><br>
	<textarea name="description">{{ old('description',$project->description) }}</textarea><br>
	<button>Editar</button>
</form>
@endsection