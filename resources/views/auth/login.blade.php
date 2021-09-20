@extends('layout')
@section('content')
<div class="container">
<div class="row justify-content-center py-3">
    <div class="col-12 col-md-8 col-lg-6 bg-white shadow py-3 rounded mx-auto">
        <form method="POST" action="{{ route('login') }}" >
            @csrf

            <h1 class="display-4">Inicio de Sesion</h1>
            <hr>

            <div class="form-group row ">
                <div class="col-md-12">
                    <label for="email" class="text-md-right">Correo</label>
                    <input type="email" class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Ingrese aquí su correo"
                        required autocomplete="email"
                        autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-12">
                    <label for="password" class="text-md-right">Contraseña</label>
                    <input type="password" class="form-control bg-light shadow-sm  @error('password') is-invalid @else border-0 @enderror"
                        id="password"
                        name="password"
                        placeholder="Ingrese aquí su contraseña"
                        required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-12">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember"  {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember"> Mantener sesión activa </label>
                    </div>
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary  btn-lg btn-block"> Iniciar Sesion </button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}"> ¿Olvidó su Contraseña? </a>
                    @endif
                </div>
            </div>
        </form>
    </div><!--.col-->
</div><!--.row-->
@endsection
