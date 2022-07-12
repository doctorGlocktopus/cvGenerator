<div>
<script>
    function httpGet(theUrl) {
        let xmlHttpReq = new XMLHttpRequest();
        xmlHttpReq.open("GET", theUrl, false); 
        xmlHttpReq.send(null);
        return xmlHttpReq.responseText;
        }
            document.addEventListener('livewire:load', function () {
                @this.json =  httpGet('http://localhost/postcode_api-master/public/api/search/stuttgart');
            })
</script>

<div>
<input wire:model="json" placeholder="{{$json}}"/>
    <div wire:ignore>
        <select class="form-control" id="select2">
            <option value="">Choose Song</option>
            @foreach($songs as $data)
            <option value="{{ $data }}">{{ $data }}</option>
            @endforeach
        </select>
    </div>

</div>{{$json}}

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