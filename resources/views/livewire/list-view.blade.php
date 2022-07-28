
<div class="fade relativ">
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
                            <th scope="row" onclick="window.location.href='/announcement/{{$i->id}}'">{{$i->id}}</th>
                            <td scope="row" onclick="window.location.href='/announcement/{{$i->id}}'">{{$i->company}}</td>
                            <td scope="row" onclick="window.location.href='/announcement/{{$i->id}}'">{{$i->address->street}} {{$i->address->postcode}}</td>
                            <td scope="row" onclick="window.location.href='/announcement/{{$i->id}}'">{{$i->job}}</td>
                            <td wire:click="test()" scope="row">
                                <livewire:modal :inputValue="'listDelete'" :listId='$i->id'/>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
</div>