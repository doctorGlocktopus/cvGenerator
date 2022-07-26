<div>
<script>

    function check() {
        input = @this.input;
        string = 'http://127.0.0.1:88/api/code/';
        @this.json =  httpGet(string+input);
    }

    function httpGet(theUrl) {
        let xmlHttpReq = new XMLHttpRequest();
        xmlHttpReq.open("GET", theUrl, false); 
        xmlHttpReq.send(null);

        return xmlHttpReq.responseText;
        }

</script>
<div>
    <div class="list-group pTop1pc flex rowD">
        <div class="flex flexEnd">
            @if($step == 0)
            <div class="padding1pc">
                <label>Postleitzahl oder Stadt eingeben</label>
                <input class="form-control" wire:model="input" oninput="check()" type="text" wire:change ='Utf8_ansi({{$json}})'>
            </div>
            <div class="padding1pc">
                <button class="btn btn-secondary">suchen</button>
            </div>
            @endif
            @if($step == 1)
            <div class="searchBar flex">
                <div class="cursor list-group-item list-group-item-action active">{{$postcode}} {{$city}}</div>
                    @foreach($search as $data)
                        <div class="cursor list-group-item list-group-item-action" wire:click.lazy="getData({{ $data }})">{{ $data["postcode"] }} {{ $data["city"] }}</div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>        
    </div>
</div>
</div>