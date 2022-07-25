

@extends('layouts.app')
@section('content')
    <div>
        <div class="padding1pc banner">
            <span>richtigGutBewerben</span>
        </div>
        <div class="padding1pc">
            @if(Auth::User())
                <livewire:list-view />
            @endif
        </div>
    </div>
@endsection





