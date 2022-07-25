

@extends('layouts.app')
@section('content')
    <div>
        <div class="padding1pc banner flex spaceEven flexEnd">
            <span>richtigGutBewerben</span>

                <span class="fontSize50pc">Kontakt</span>
                <span class="fontSize50pc">FAQ</span>
                <span class="fontSize50pc">Impressum</span>

        </div>
        <div class="padding1pc wContent">
            @if(Auth::User())
                <livewire:list-view />
            @endif
        </div>
    </div>
@endsection





