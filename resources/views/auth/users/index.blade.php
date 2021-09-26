@extends('layout')
@section('title','Proyectos')
@section('content')
<div class="container h-screen">

	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4">Usuarios</h1>
		@auth
		<a class="btn btn-brand" href="#" data-toggle="modal" data-target="#modalRegisterUser">Crear Usuario</a>
		@endauth
	</div>

	<p class="lead text-secondary text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</p>
	
	<table class="table table-hover table-light table-responsive-lg"> 
		<thead  class="text-secondary"> 
			<tr class=" shadow-sm"> 
				<th class="text-center">N°</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Registro</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody> 
			@forelse($users as $user)
			<tr class="text-black-50 shadow-sm"> 
				<td class="text-center">{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->created_at->diffForHumans() }}</td>
				<td>
					<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEditForm{{  $user->id }}">Editar</button>
					<a href="#" class="btn btn-sm">B</a>
				</td>
			</tr>

				@include('auth.users._modals')

			@empty
			<tr class="text-black-50 shadow-sm"> 
				<td class="text-center text-danger" colspan="5">No hay elementos</td>
			</tr>
			@endforelse
		</tbody>
	</table>
</div><!--container-->


<div class="modal fade" id="modalRegisterUser">
	<div class="modal-dialog">
        <div class="modal-content">

          <!-- cabecera del diálogo -->
          <div class="modal-header">
            <h4 class="modal-title display-5">Registro de Usuario</h4>
            <button type="button" class="close" data-dismiss="modal">X</button>
          </div>

          <!-- cuerpo del diálogo -->
          <div class="modal-body">

		    <form method="POST" id="registerUser" action="{{ route('users.register') }}">
		        @csrf

		        <div class="form-group">
		            <label for="name">{{ __('Name') }}</label>
		            <input type="text" class="form-control bg-light shadow-sm  @error('name') is-invalid @enderror"
		            id="name"
		            name="name"
		            value="{{ old('name') }}"
		            placeholder="Escriba aquí el nombre..."
		            autofocus>
		            @error('name')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>

		        <div class="form-group">
		            <label for="email" >{{ __('E-Mail Address') }}</label>
		            <input type="email" class="form-control bg-light shadow-sm  @error('email') is-invalid @enderror"
		                id="email"
		                name="email"
		                value="{{ old('email') }}"
		                placeholder="Escriba aquí el correo...">
		            @error('email')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>

		        <div class="form-group">
		            <label for="password">{{ __('Password') }}</label>
		            <input type="password" class="form-control bg-light shadow-sm  @error('password') is-invalid @enderror"
		            id="password"
		            name="password"
		            placeholder="Escriba aquí la contraseña...">
		            @error('password')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>

		        <div class="form-group">
		            <label for="password-confirm">{{ __('Confirm Password') }}</label>
		            <input type="password" class="form-control bg-light shadow-sm "
		            id="password-confirm"
		            name="password_confirmation"
		            placeholder="Escriba de nuevo la contraseña...">
		        </div>
		    </form>

          </div><!--.modal-body-->

          <!-- pie del diálogo -->
          <div class="modal-footer">
          	<button type="submit" form="registerUser" class="btn btn-primary" >Registrar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>

        </div><!--.modal-content-->
    </div><!--.modal-dialog-->
</div><!--.modal-->

@if($errors->any())
	<script type="text/javascript">
		window.onload = function(){
			$('#modalRegisterUser').modal('toggle');
		};
	</script>
@endif
@endsection