<div>
    <div class="modalContainer myModal">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Firma</th>
                <th scope="col">Anstellung</th>
            </tr>
            </thead>
            <tbody>
                @foreach($user->announcement as $i)
                <tr wire:click="step({{$i->id}})">
                    <th scope="row">{{$i->id}}</th>
                    <td>{{$i->company}}</td>
                    <td>{{$i->job}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if($step == 1)

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
                <span class="input" role="textbox" contenteditable>{{ $announcement->start }}</span>
                <input hidden wire:model="start">
                <br>
                <br>
                <!-- body -->
                <span class="input" role="textbox" contenteditable>{{ $announcement->body }}</span>
                <!-- end -->
                <br>
                <br>
                <span class="input" role="textbox" contenteditable>{{ $announcement->end }}</span>
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
    @endif
</div>