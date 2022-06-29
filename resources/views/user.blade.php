@extends('layouts.app')
@section('content')
    <div class="container padding10pc">
        @foreach($user->announcement as $i)
            <a href="/announcement/{{$i->id}}" class="flex">
                id: {{$i->id}}
                Firma: {{$i->company}}
                Anstellung: {{$i->job}}
            </a><br>
        @endforeach
    </div>
@endsection