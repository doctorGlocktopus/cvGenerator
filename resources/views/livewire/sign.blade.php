<div>
<script>
    function test() {
        // h = document.getElementById("height").innerHTML;
        h = @this.range
        $( '#img' ).css('height', h);
    }
</script>

    <div class="imgUp">
        <img id="img" class="fade clip-circle" src="http://localhost/bewerbung/resources/unterschrift.jpg">
    </div>
    <input id="height" min="10" max="1000" wire:model="range" type="range">
    <button onclick='test()'>test</button>
    {{$range}}
</div>
