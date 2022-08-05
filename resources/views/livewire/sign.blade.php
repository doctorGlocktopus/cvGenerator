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
<div id="photo">
    <h1>GeeksforGeeks</h1>
    Hello everyone! This is a
    trial page for taking a
    screenshot.
    <br><br>
    This is a dummy button!
    <button> Dudsaaaaaaaaaaaaaammy</button>
    <br><br>
    Click the button below to
    take a screenshot of the div.
    <br><br>

    <!-- Define the button 
    that will be used to 
    take the screenshot -->
    <button onclick="takeshot()">
        Take Screenshot
    </button>
</div>
<h1>Screenshot:</h1>
<div id="output"></div>

<script type="text/javascript">

    // Define the function 
    // to screenshot the div
    function takeshot() {
        let div =
            document.getElementById('photo');

        // Use the html2canvas
        // function to take a screenshot
        // and append it
        // to the output div
        html2canvas(div).then(
            function (canvas) {
                document
                .getElementById('output')
                .appendChild(canvas);
            })
    }
</script>