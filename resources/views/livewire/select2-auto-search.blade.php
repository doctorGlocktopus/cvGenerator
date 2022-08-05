<div>
<script>

    function check() {
        if(@this.input.length >= 2)
            string = 'http://127.0.0.1:88/api/code/';
            @this.json =  httpGet(string+@this.input);
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
    <span class="text-danger">{{$error}}</span>
    <div class="list-group pTop1pc flex rowD">
        <div class="flex flexEnd">
            @if($step == 0)
                <div class="padding1pc">
                    <label>Postleitzahl oder Stadt eingeben</label>
                    <input class="form-control" wire:model="input" type="text" oninput="check()">
                </div>
                <div wire:click='Utf8_ansi({{$json}})' class="btn btn-secondary">suchen</div>
            @endif
            @if($step == 1)
                <div class="searchBar flex">
                    <div class="cursor list-group-item list-group-item-action active">{{$postcode}} {{$city}}</div>
                        @foreach($search as $data)
                            <div class="cursor list-group-item list-group-item-action" wire:click="getData({{ $data }})">{{ $data["postcode"] }} {{ $data["city"] }}</div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>        
    </div>
</div>
</div>