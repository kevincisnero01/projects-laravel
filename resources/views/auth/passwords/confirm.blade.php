@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-12 col-md-8 col-lg-6 bg-white shadow py-3 rounded mx-auto">
        <h1>Confirmar Contraseña</h1>
        {{ __('Please confirm your password before continuing.') }}
        <hr>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="form-group row">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control bg-light shadow-sm @error('password') is-invalid @enderror"
                    id="password"
                    name="password"
                    required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-brand btn-lg btn-block">
                        {{ __('Confirm Password') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
        </div><!--.col-->
    </div><!--.row-->
</div><!--.container-->
@endsection
