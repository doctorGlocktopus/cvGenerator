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
    <div>
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
    </div>
    {{-- <div class="list-group">
        @if($step == 0)
            <input class="form-control" wire:model="input" oninput="check(1)" type="text" wire:change ='Utf8_ansi({{$json}})'>

        @endif
        @if($step == 1)
            <div class="cursor list-group-item list-group-item-action active" value="">{{$code}} {{$name}}</div>
                @foreach($search as $data)
                    <div class="cursor list-group-item list-group-item-action" wire:click="getData()">{{ $data["code"] }} {{ $data["name"] }}</div>
                @endforeach
            </div>
        @endif
        
    </div> --}}
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