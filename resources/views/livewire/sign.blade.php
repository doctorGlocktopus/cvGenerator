<div>
<script>
    function test() {
        // h = document.getElementById("height").innerHTML;
        h = @this.range
        $( '#img' ).css('height', h);
    }
</script>
    {{-- <div style="height: 239px; width: 432px;" class="white">

    </div> --}}
    <div class="imgUp">
        <div style="height: 239px; width: 432px;" class="mask">
            <img class="fade" src="http://localhost/bewerbung/resources/unterschrift.jpg">
        </div>
    </div>
    {{-- <input id="height" min="10" max="1000" wire:model="range" type="range">
    <button onclick='test()'>test</button> --}}
    {{$range}}
</div>
