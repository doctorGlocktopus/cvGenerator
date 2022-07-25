

@extends('layouts.app')
@section('content')
    <div>
        <div class="pTop1pc banner">
            <span>richtigGutBewerben</span>
        </div>
        <div class="pTop1pc">
            @if(Auth::User())
                <livewire:list-view />
            @endif
        </div>
    </div>
@endsection





