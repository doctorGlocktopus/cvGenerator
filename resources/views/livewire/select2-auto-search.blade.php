<div>
<script>



    function httpGet(theUrl) {
        let xmlHttpReq = new XMLHttpRequest();
        xmlHttpReq.open("GET", theUrl, false); 
        xmlHttpReq.send(null);

        return xmlHttpReq.responseText;
        }

        document.addEventListener('livewire:load', function () {
            
            @this.json =  httpGet('http://127.0.0.1:88/api/code/666');
        })
</script>

    @if($step == 0)
        <input wire:model="input" type="text" oninput="myFunction()" wire:change ='Utf8_ansi({{$json}})'>
    @else
        <select class="form-control" id="select2">
            <option value="">{{$code}} {{$name}}</option>
            @foreach($search as $data)
                <option value="{{ $data }}">{{ $data["code"] }} {{ $data["name"] }}</option>
            @endforeach
        </select>
    @endif


    <button class="btn" wire:click="buff()">Modal öffnen</button>
    @if($buff == 1)
        <div id="modal">
            Versuch doch die select funktion selber zu machen mit der Modal IDee, also anstatt eventmanager machst du ein clickevent, was ein div öffnet, dass wie eine selectbox aussieht.<br>
        </div>
    @endif
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