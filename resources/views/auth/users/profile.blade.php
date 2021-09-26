@extends('layout')
@section('content')
<div class="container">
<div class="row justify-content-center py-3">
<div class="col-12 col-md-8 col-lg-6 mx-auto">


    <form class="bg-white p-3 shadow rounded" method="POST" action="#">

        <h1 class="display-4">Perfil</h1>
        <hr>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control bg-light shadow-sm @error('name') is-invalid @enderror"
            id="name"
            name="name"
            value="{{ old('name', Auth::user()->name) }}"
            placeholder="Escriba aquí el nuevo nombre..." 
            autofocus >
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" > Correo </label>
            <input type="email" class="form-control bg-light shadow-sm  @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email', Auth::user()->email) }}"
                placeholder="Escriba aquí el nuevo correo...">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       
        <div class="form-group">
            <label for="password"> Contraseña</label>
            <input type="password" class="form-control bg-light shadow-sm  @error('password') is-invalid @enderror"
            id="password"
            name="password"
            placeholder="Escriba aquí la nueva contraseña...">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm"> Confirmar Contraseña</label>
            <input type="password" class="form-control bg-light shadow-sm "
            id="password-confirm"
            name="password_confirmation"
            placeholder="Repita la nueva contraseña...">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-brand btn-lg btn-block">
                Actualizar Información
            </button>
            <a class="btn btn-block" href="{{ route('home') }}">Volver</a>
        </div>
    </form>
   

</div><!--.col-12-->
</div><!--.row-->
</div><!--.container-->
@endsection
