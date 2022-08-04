@extends('layouts.app')
@section('content')
<div class="flex padding10pc spaceAround">
    <div class="w33">
        <div class="flex columnD">
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
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Register') }}
                    </button>
                </div>
                </form>
            </div>
        </div>
        <script>
            function gate(key) {
                if(document.getElementById(key).style.display == "none")
                document.getElementById(key).style.display = "block";
                else
                document.getElementById(key).style.display = "none";
            }
        </script>
        <div class="w33">
            <h1>Datenschutzerklärung</h1>
            <h2 id="m14">Einleitung</h2>
            <p>Mit der folgenden Datenschutzerklärung möchten wir Sie darüber aufklären, welche Arten Ihrer personenbezogenen Daten (nachfolgend auch kurz als "Daten“ bezeichnet) wir zu welchen Zwecken und in welchem Umfang verarbeiten. Die Datenschutzerklärung gilt für alle von uns durchgeführten Verarbeitungen personenbezogener Daten, sowohl im Rahmen der Erbringung unserer Leistungen als auch insbesondere auf unseren Webseiten, in mobilen Applikationen sowie innerhalb externer Onlinepräsenzen, wie z.B. unserer Social-Media-Profile (nachfolgend zusammenfassend bezeichnet als "Onlineangebot“).</p>
            <livewire:modal :inputValue="'info'"/>
        </div>
    </div>
</div>
@endsection
