@extends('layouts.app')

@section('content')
<div class="container" style="min-width: 800px">
    <div class="contentWrapper">
        <div class="flex columnD">
        <div>
            @foreach($users as $user)
                <a href="/overviewAnnouncement/{{$user->id}}" >ID: {{ $user->id }} {{$user->first_name}} {{$user->last_name}}</a> <br>
                Straße: {{$user->address->street}} {{$user->address->number}}<br>
                Stadt: {{$user->address->country}} <br>
                <br>
            @endforeach
        </div>
        <div>
            <livewire:overview />
        </div>
        </div>
    </div>
</div>

@endsection
