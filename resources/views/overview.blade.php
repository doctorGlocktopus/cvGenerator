@extends('layouts.app')

@section('content')
<div class="container" style="min-width: 800px">
    <div class="contentWrapper">
        <div class="flex columnD">
        <div>
            @foreach($users as $user)
                <a href="/overviewAnnouncement/{{$user->id}}" >{{$user->first_name}}</a> <br>
                address: {{$user->address}} <br><br>
            @endforeach
        </div>
        <div>
            <livewire:overview />
        </div>
        </div>
    </div>
</div>

@endsection
