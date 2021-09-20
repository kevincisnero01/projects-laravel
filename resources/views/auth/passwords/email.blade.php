@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-12 col-md-8 col-lg-6 bg-white shadow py-3 rounded mx-auto">
            <h1>Restablecer contraseña</h1>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control bg-light shadow-sm @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Ingrese su correo electronico"
                        required
                        autocomplete="email"
                        autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Enviar enlace
                    </button>
                </div>
            </form>
        </div><!--.col-->
    </div><!--.row-->
</div><!--.container-->
@endsection
