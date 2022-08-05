{{-- <div>
<script>
    function test() {
        // h = document.getElementById("height").innerHTML;
        h = @this.range
        $( '#img' ).css('height', h);
    }
</script>

    <div class="imgUp">
        <div style="height: 239px; width: 432px;" class="mask">
            <img class="fade" src="http://localhost/bewerbung/resources/unterschrift.jpg">
        </div>
    </div>

    {{$range}}
</div> --}}
{{-- <div>
    <input type="range" min="250" max="1000" wire:model="range">
    <img id="my-img" src="http://localhost/bewerbung/resources/unterschrift.jpg" width="{{$range}}px" />
</div> --}}
<div >
    <button onclick="takeshot()">
        Take Screenshot
    </button>
</div>
<h1>Screenshot:</h1>
<div id="output" class="imgUp imgUpChild"></div>

<script type="text/javascript">

    // Define the function 
    // to screenshot the div
    function takeshot() {
        let div =
            document.getElementById('mydivheader');

        // Use the html2canvas
        // function to take a screenshot
        // and append it
        // to the output div
        x = html2canvas(div)
        .then(
            function (canvas) {
                document
                .getElementById('output')
                .appendChild(canvas);
            })
    }
</script>