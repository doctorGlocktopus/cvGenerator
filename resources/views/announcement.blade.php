@extends('layouts.app')
@section('content')
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
            <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->start)) !!}</span>
            
            <br>
            <br>
            <!-- body -->
            <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->body)) !!}</span>
            <!-- end -->
            <br>
            <br>
            <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->end)) !!}</span>
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