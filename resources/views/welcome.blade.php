@extends('layouts.app')
@section('content')

{{-- <livewire:sign> --}}

    {{-- <livewire:image-upload-component /> --}}
{{-- <input type="file" name="image" placeholder="Choose image" id="image"> --}}
    <div>
        <livewire:modal :inputValue="'imprint'" />

        @if(Auth::User())
            <livewire:list-view />
        @endif
    </div>
@endsection



