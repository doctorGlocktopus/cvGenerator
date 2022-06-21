<body>
    @extends('layouts.app')
    <div class="doc">
        <div class="docContainer">
            @foreach($users as $user)
                {{$user->address}} <br><br>
            @endforeach
        </div>
    </div>
</body>
