<body>
    @extends('layouts.app')
    <div class="doc">
        <div class="docContainer">
            @foreach($users as $user)
                <a href="/overviewAnnouncement/{{$user->id}}" >{{$user->first_name}}</a> <br>
                address: {{$user->address}} <br><br>
            @endforeach
        </div>
    </div>
</body>
