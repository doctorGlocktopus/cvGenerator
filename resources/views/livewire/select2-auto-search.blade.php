<div>
    <script>



        function httpGet(theUrl) {
            let xmlHttpReq = new XMLHttpRequest();
            xmlHttpReq.open("GET", theUrl, false); 
            xmlHttpReq.send(null);

            return xmlHttpReq.responseText;
            }

            document.addEventListener('livewire:load', function () {
                @this.json =  httpGet('http://127.0.0.1:88/api/code/711');
                // Livewire.emit('Utf8_ansi()');
            })
    </script>

    <input type="text" wire:change ='Utf8_ansi({{$json}})'>
    <div >
        <select class="form-control" id="select2">
            <option value="">Choose Song</option>
            @foreach($songs as $data)
                <option value="{{ $data }}">{{ $data["code"] }} {{ $data["name"] }}</option>
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