<div class="fade relativ">
    @if($close == 1)
        <div wire:click="close(0)" class="close cursor btn">
            open
        </div>
    @else
    <div wire:click="close(1)" class="close cursor">
        x
    </div>
        @if($user->announcement)
            <div class="myModal fade">
                <h4>Deine Bewerbungen</h4>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firma</th>
                        <th scope="col">Addresse</th>
                        <th scope="col">Anstellung</th>
                        <th scope="col">Löschen</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($user->announcement as $i)
                        <tr class="cursor">
                            <th scope="row"><a href="/announcement/{{$i->id}}">{{$i->id}}</a></th>
                            <td ><a href="/announcement/{{$i->id}}">{{$i->company}}</a></td>
                            <td ><a href="/announcement/{{$i->id}}">{{$i->address->street}} {{$i->address->postcode}}</a></td>
                            <td ><a href="/announcement/{{$i->id}}">{{$i->job}}</a></td>
                            <td><i class="fa fa-trash" aria-hidden="true"></i> dauerhaft löschen</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endif
</div>
</div>