@extends('layouts.app')

@section('content')
<div class="container" style="min-width: 800px">

        <div class="contentWrapper">
            <div class="flex">
                <h1><label for="register" >{{ __('Registerierung') }}</label></h1>
                
                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <label for="email" >{{ __('Email Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <label for="salutation" >{{ __('Anrede') }}</label>


                        <select id="salutation" type="text" class="form-control @error('salutation') is-invalid @enderror" name="salutation" value="Herr" required autocomplete="salutation" autofocus>
                            <option value="Herr">Herr</option>
                            <option value="Frau">Frau</option>
                            <option value="Sein">Sein</option>
                            <option value="Ihr">Ihr</option>
                        </select>
                        @error('salutation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label for="title" >{{ __('Titel') }}</label>


                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>                
                        <label for="first_name" >{{ __('Vorname') }}</label>


                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror



                        <label for="last_name" >{{ __('Nachname') }}</label>

                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror



                        <label for="password" >{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror



                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="contentWrapper">
                        <button type="submit" class="btn btn-primary btn-lg btn-block w33">
                            {{ __('Register') }}
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
