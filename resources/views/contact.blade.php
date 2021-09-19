@extends('layout')
@section('title','Contact')
@section('content')
<div class="container py-3">
<div class="row">
	<div class="col-12 col-ms-10 col-lg-6 mx-auto">
	<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('contact.store')}}">
		@csrf
		<h1>@lang('Contact')</h1>
		<div class="form-group">
			<label for="name">Nombre</label>
			<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
				type="text"
				id="name"
				name="name"
				placeholder="Escribe aquí el nombre..."
				value="{{ old('name') }}">
			@error('name')
				<span class="invalid-feeedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div><!--.form-group-->

		<div class="form-group">
			<label for="email">Correo</label>
			<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
				type="email"
				id="email"
				name="email"
				placeholder="Escribe aquí el correo..."
				value="{{ old('email') }}">
			@error('email')
				<span class="invalid-feeedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div><!--.form-group-->

		<div class="form-group">
			<label for="subject">Asunto</label>
			<input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
				type="text"
				id="subject"
				name="subject"
				placeholder="Escribe aquí el asunto..."
				value="{{ old('subject') }}">
			@error('subject')
				<span class="invalid-feeedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div><!--.form-group-->

		<div class="form-group">
			<label for="content">Contenido</label>
			<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
			id="content"
			name="content"
			placeholder="Escribe aquí el contenido del mensaje...">{{ old('content') }}</textarea>
			@error('content')
				<span class="invalid-feeedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div><!--.form-group-->
		<button class="btn btn-primary btn-lg btn-block" type="submit">@lang('Submit')</button>
	</form>
	</div><!--.col-->
</div><!--.row-->
</div><!--.container-->
@endsection