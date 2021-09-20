@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-12 col-md-8 col-lg-6 bg-white shadow py-3 rounded mx-auto">
            <h1>Restablecer Contraseña</h1>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input type="email" class="form-control bg-light shadow-sm @error('email') is-invalid @enderror"
                         id="email"
                         name="email"
                         value="{{ $email ?? old('email') }}"
                         required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" class="form-control bg-light shadow-sm @error('password') is-invalid @enderror"
                        id="password"
                        name="password"
                        required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control bg-light shadow-sm "
                        id="password-confirm"
                        name="password_confirmation"
                        required autocomplete="new-password">
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div><!--.col-->
    </div><!--.row-->
</div><!--.container-->
@endsection
