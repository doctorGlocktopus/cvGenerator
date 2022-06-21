<body>
    @extends('layouts.app')
    <div class="doc">
        <div class="docContainer">
            @foreach($users as $user)
                user: {{$user}} <br>
                address: {{$user->address}} <br><br>
            @endforeach
        </div>
    </div>
</body>
