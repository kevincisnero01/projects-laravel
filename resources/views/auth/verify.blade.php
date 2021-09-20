@extends('layout')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <h1>{{ __('Verify Your Email Address') }}</h1>

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link btn-lg btn-block p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
    </div>
</div>
@endsection
