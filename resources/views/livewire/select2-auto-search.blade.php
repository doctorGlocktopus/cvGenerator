<div>
<script>

    function buff(hit) {
        
        @this.buff = hit;
        console.log(hit);
    }

    function check(i) {
        @this.json =  httpGet('http://127.0.0.1:88/api/code/' + i);
    }

    function httpGet(theUrl) {
        let xmlHttpReq = new XMLHttpRequest();
        xmlHttpReq.open("GET", theUrl, false); 
        xmlHttpReq.send(null);

        return xmlHttpReq.responseText;
        }

</script>
    <div>
        @if($step == 0)
            <input class="form-control" wire:model="input" oninput="check({{$input}})" type="text" wire:change ='Utf8_ansi({{$json}})'>

        @else
            <select class="form-control" id="select2">
                <option value="">{{$code}} {{$name}}</option>
                @foreach($search as $data)
                    <option value="{{ $data }}">{{ $data["code"] }} {{ $data["name"] }}</option>
                @endforeach
            </select>
        @endif
    </div>
</div>








{{-- @push('scripts')

    <script>
        $(document).ready(function () {
            $('#select2').select2();
            $('#select2').on('change', function (e) {
                var item = $('#select2').select2("val");
                @this.set('viralSongs', item);
            });
        });
    </script>

@endpush --}}
</div>