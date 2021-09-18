@extends('layout')
@section('title','Proyectos')
@section('content')
<h1>Edicion de  Proyecto</h1>

@include('partials.errors-validation')

<form action="{{ route('projects.update', $project) }}" method='POST'>
	@method('put')
	@include('projects._form',[ 'btn_txt' => 'Actualizar' ])
</form>
@endsection