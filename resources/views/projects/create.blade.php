@extends('layout')
@section('title','Portfolio')
@section('content')
<h1>Crear Proyecto</h1>

@include('partials.errors-validation')

<form action="{{ route('projects.store') }}" method='POST'>
	@include('projects._form',[ 'btn_txt' => 'Guardar' ])
</form>

@endsection