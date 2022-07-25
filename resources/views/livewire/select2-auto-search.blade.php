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
    {{-- <div>
        @if($step == 0)
            <input class="form-control" wire:model="input" oninput="check(1)" type="text" wire:change ='Utf8_ansi({{$json}})'>

        @endif
        @if($step == 1)
            <select class="form-control" id="select2">
                <option value="">{{$code}} {{$name}}</option>
                @foreach($search as $data)
                    <option wire:click="getData()" value="{{ $data }}">{{ $data["code"] }} {{ $data["name"] }}</option>
                @endforeach
            </select>
        @endif
    </div> --}}

    <div class="list-group pTop1pc flex rowD">
        @if($step == 0)
        <div class="flex columnD">
            <label>Postleitzahl oder Stadt eingeben</label>
            <input class="form-control" wire:model="input" oninput="check()" type="text" wire:change.lazy ='Utf8_ansi({{$json}})'>
        </div>
        @endif
        @if($step == 1)
        <div class="searchBar">
            <div class="cursor list-group-item list-group-item-action active">{{$postcode}} {{$city}}</div>
                @foreach($search as $data)
                    <div class="cursor list-group-item list-group-item-action" wire:click.lazy="getData({{ $data }})">{{ $data["postcode"] }} {{ $data["city"] }}</div>
                @endforeach
            </div>
        </div>
        @endif
        @if($step == 2)
            <div>
                <label>Postleitzahl</label>
                <input type="number" class="form-control" placeholder="Postleitzahl" wire:model="postcode">
                @error('Postleitzahl') <span class="text-danger">{{ $message }}</span> @enderror          
            </div>
            <div>
                <label>Stadt</label>
                <input type="text" class="form-control" placeholder="Stadt / Dorf" wire:model="city">
                @error('Stadt') <span class="text-danger">{{ $message }}</span> @enderror
            </div>     
        @endif
        
    </div>
</div>








{{-- @push('scripts')

    <script>
        $(document).ready(function () {
            $('#select2').select2();
            console.log(1);
            $('#select2').on('change', function (e) {
                var item = $('#select2').select2("val");
                @this.set('viralSongs', item);
            });
        });
    </script>

@endpush --}}
</div>