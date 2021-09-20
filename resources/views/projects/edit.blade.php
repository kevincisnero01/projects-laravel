@extends('layout')
@section('title','Proyectos')
@section('content')
<div class="container">
<div class="row">
<div class="col-12 col-sm-10 col-lg-8 mx-auto">

@include('partials.errors-validation')
<form class="bg-white p-3 shadow rounded" action="{{ route('projects.update', $project) }}" method='POST'>

	<h1 class="display-4">Edicion de  Proyecto</h1>

	@method('put')
	@include('projects._form',[ 'btn_txt' => 'Actualizar' ])
</form>

</div><!--.col-12-->
</div><!--.row-->
</div><!--.container-->
@endsection