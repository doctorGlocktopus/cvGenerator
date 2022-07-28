<div>
<script>

    function check(y) {
        @this.stepper = y + y;
        if(@this.stepper == 2){
            console.log(@this.stepper);
            input = @this.input;
            string = 'http://127.0.0.1:88/api/code/';
            @this.json =  httpGet(string+input);
        }
    }

    function httpGet(theUrl) {
        let xmlHttpReq = new XMLHttpRequest();
        xmlHttpReq.open("GET", theUrl, false); 
        xmlHttpReq.send(null);
        @this.stepper = 0;

        return xmlHttpReq.responseText;
        }

</script>
<div>
    {{$error}}
    {{strlen($input)}}
    <div class="list-group pTop1pc flex rowD">
        <div class="flex flexEnd">
            @if($step == 0)
            <div class="padding1pc">
                <label>Postleitzahl oder Stadt eingeben</label>
                <input class="form-control" wire:model="input" type="text" oninput="check(1)">
            </div>
                @if(strlen($input) < 3);
                    <div class="padding1pc">
                        <div wire:click='error("Sie müssen mindestens zwei Ziffern eintragen")' class="btn btn-secondary">suchen</div>
                    </div>
                @else
                    <div class="padding1pc">
                        <div wire:click='Utf8_ansi({{$json}})' class="btn btn-secondary">suchen</div>
                    </div>
                @endif
            @endif
            @if($step == 1)
            <div class="searchBar flex">
                <div class="cursor list-group-item list-group-item-action active">{{$postcode}} {{$city}}</div>
                    @foreach($search as $data)
                        <div class="cursor list-group-item list-group-item-action" wire:click="getData({{ $data }})">{{ $data["postcode"] }} {{ $data["city"] }}</div>
                    @endforeach
                    <div wire:click='back()' class="btn btn-secondary">neue Suche</div>
                </div>
            </div>
            @endif
        </div>        
    </div>
</div>
</div>