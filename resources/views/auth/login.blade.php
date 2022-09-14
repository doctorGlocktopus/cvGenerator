@extends('layouts.app')
@section('content')
<div class="flex padding10pc spaceAround">
    <div class="wContent">
        <div class="flex columnD">
    <h1><label for="login" >{{ __('Login') }}</label></h1>
    <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">{{ __('Email Adresse') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror



            <label for="password">{{ __('Passwort') }}</label>


            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('merken') }}
                </label>
            </div>



            <button type="submit" class="btn btn-primary w33">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Passwort vergessen?') }}
                </a>
            @endif
        </form>
    </div>
</div>
@endsection
