@extends('layouts.app')

@if(Auth::User())
    @if(!Auth::User()->address)
    @section('content')
    <div>
        <div>
            <livewire:builder />
        </div>
    </div>
    @else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="banner">{{ __('richtigGutBewerben200') }}</div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endsection
@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="banner">{{ __('richtigGutBewerben200') }}</div>
            </div>
        </div>
    </div>
</div>
@endif
