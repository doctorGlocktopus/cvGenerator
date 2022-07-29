@extends('layouts.app')
@section('content')
    <div>
        <livewire:view  :id='$announcement->id'/>
    </div>
@endsection
