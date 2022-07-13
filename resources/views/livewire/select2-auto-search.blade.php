<div>
    <script>
        function httpGet(theUrl) {
            let xmlHttpReq = new XMLHttpRequest();
            xmlHttpReq.open("GET", theUrl, false); 
            xmlHttpReq.send(null);
            return xmlHttpReq.responseText;
            }
                document.addEventListener('livewire:load', function () {
                    @this.json =  httpGet('http://127.0.0.1:88/api/code/712')
                    
                    data = httpGet('http://127.0.0.1:88/api/code/711')
                
                })
    </script>


    <button wire:click='Utf8_ansi({{$json}})'> json: </button>
    {{$code}} {{$name}}
    {{-- {{var_dump($json)}} --}}
    {{-- <input wire:model="json" placeholder="{{$json}}"/> --}}
    <div wire:ignore>
        <select class="form-control" id="select2">
            <option value="">Choose Song</option>
            @foreach($songs as $data)
                <option value="{{ $data }}">{{ $data }}</option>
            @endforeach
        </select>
    </div>

</div>

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

@endpush
</div>