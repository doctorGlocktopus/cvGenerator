@extends('layouts.app')

@section('content')
<div>
    <h1>{{$error}}</h1>
    <h1>{{ $announcement->id }} User</h1>
    <h1>{{ $announcement->temp }} Template</h1>
</div>
<div class="doc">
    <div class="docContainer">
        <div class="flex spaceBetweeen addressLine">
            <div class="address">
                {{ $announcement->company }}<br>
                {{ $announcement->address->street }} {{ $announcement->address->number }}<br>
                {{ $announcement->address->postcode }} {{ $announcement->address->city }}<br>
            </div>
            <div class="myAddress">
                {{ $user->first_name }} {{ $user->last_name }}<br>
                {{ $user->address->street }} {{ $user->address->number }}<br>
                {{ $user->address->postcode }} {{ $user->address->city }}<br>
            </div>
        </div>

        <div class="date">{{ $user->address->city }} den, {{ date('d.m.Y') }}</div>
{{-- user_id	name	street	postcode	country	job	start	contact	type	body	end	 --}}
        <div class="letter">
            <br>
            <br>
            <!-- type + job -->
            Bewerbung als {{$announcement->job}} in {{$announcement->type}}
            <br>
            <br>
            <br>
            <!-- contact -->
            Sehr geehrter {{$announcement->contact}},
            <br>
            <br>
            <!-- start -->
            {{ $announcement->start }}
            <br>
            <br>
            <!-- body -->
            {{ $announcement->body }}
            <!-- end -->
            <br>
            <br>
            {{ $announcement->end }}
            <br>
            <br>
            Mit freundlichen Grüßen,
            <br>
            <br>
            <br>
            <br>
            {{ $user->first_name }} {{ $user->last_name }}
        </div>
    </div>
</div>
@endsection