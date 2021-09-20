@extends('layout')
@section('content')
<div class="container">
<div class="row justify-content-center py-3">
<div class="col-12 col-md-8 col-lg-6 mx-auto">

    <form class="bg-white p-3 shadow rounded" method="POST" action="{{ route('register') }}">
        @csrf

        <h1 class="display-4">Registro de Usuario</h1>
        <hr>

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control bg-light shadow-sm  @error('name') is-invalid @enderror"
            id="name"
            name="name"
            value="{{ old('name') }}"
            placeholder="Escriba aquí el nombre..."
            required autocomplete="name" autofocus>
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
                placeholder="Escriba aquí el correo..."
                required autocomplete="email">
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
            placeholder="Escriba aquí la contraseña..."
            required autocomplete="new-password">
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
            placeholder="Escriba de nuevo la contraseña..."
            required autocomplete="new-password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                {{ __('Register') }}
            </button>
        </div>
    </form>

</div><!--.col-12-->
</div><!--.row-->
</div><!--.container-->
@endsection
