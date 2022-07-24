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
        @if($step == 0)
            <input class="form-control" wire:model="input" oninput="check(1)" type="text" wire:change ='Utf8_ansi({{$json}})'>

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







{{-- 
@push('scripts')

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