@extends('layout')
@section('title','About')
@section('content')
<div class="container">
<div class="row">
	<div class="col-12 col-sm-5 col-lg-6 mx-auto">
		<img class="img-fluid mb-4" src="/img/home.png" alt="Desarrollo Web">
	</div><!--.col-12-->
	<div class="col-12 col-sm-7 col-lg-6 mx-auto">
		<h1 class="display-4 text-primary">Quien soy</h1>
		<p class="lead text-secundary text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<a class="btn btn-lg btn-block btn-primary">Contactame</a>
		<a class="btn btn-lg btn-block btn-outline-primary">Proyectos</a>
	</div><!--.col-12-->
</div><!--.row-->
</div><!--.container-->
@endsection