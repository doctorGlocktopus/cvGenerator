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
                            <th wire:click="choose({{$i->id}})" scope="row">{{$i->id}}</th>
                            <td wire:click="choose({{$i->id}})" >{{$i->company}}</td>
                            <td wire:click="choose({{$i->id}})" >{{$i->address->street}} {{$i->address->postcode}}</td>
                            <td wire:click="choose({{$i->id}})" >{{$i->job}}</td>
                            <td wire:click="delete({{$i->id}})"><i class="fa fa-trash" aria-hidden="true"></i> dauerhaft löschen</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endif
</div>
</div>