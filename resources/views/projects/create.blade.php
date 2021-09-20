@extends('layout')
@section('title','Proyectos')
@section('content')
<div class="container">
<div class="row">
<div class="col-12 col-sm-10 col-lg-8 mx-auto">

@include('partials.errors-validation')

<form class="bg-white p-3 shadow rounded"
	action="{{ route('projects.store') }}"
	method='POST'>

	<h1 class="display-4">Crear Proyecto</h1>
	<hr>

	@include('projects._form',[ 'btn_txt' => 'Guardar' ])
</form>

</div><!--.col-12-->
</div><!--.row-->
</div><!--.container-->
@endsection