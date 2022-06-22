<body>
    @extends('layouts.app')
    <div class="doc">
        <div class="docContainer">
            @foreach($announcements as $announcement)
                {{$announcement->company}}
                {{$announcement->job}} <br><br><br>
            @endforeach
        </div>
        <br><br><br><br>
    </div>
</body>
