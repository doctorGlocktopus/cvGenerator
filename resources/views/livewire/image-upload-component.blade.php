<div>
    <div>

    </div>
    <div class="container mt-5 pt-5">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card" style="height: 70vh;">
                    <div class="card-header">
                        <h5 class="card-title">Image Upload</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 pl-4 pr-4 text-center">
                                @if (session()->has('message'))
                                    <div class="alert alert-success text-center">{{ session('message') }}</div>
                                @endif
                                <form wire:submit.prevent="uploadImage">
                                    <div class="form-group">
                                        <label for="image" class="font-weight-bold">Wähle dein Bild aus</label>
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <input type="file" class="form-control" wire:model="image" style="padding: 3px 5px;" />
                                            </div>
                                        </div>
    
                                        @error('image')
                                            <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                        @enderror


                                        <div wire:loading wire:target="image" wire:key="image"><i class="fa fa-spinner fa-spin mt-2 ml-2"></i> wir arbeiten</div>


                                        {{-- ImagePreview --}}
                                        @if($image)
                                        <div id="photo">
                                            <input type="range" min="250" max="1000" wire:model="range">
                                            <div  id="mydivheader" style="height: 239px; width: 432px;" class="mask">
                                                <img onclick="takeshot()" width="{{$range}}px"  id="mydiv" class="fade mt-2" src="{{ $image->temporaryUrl() }}"  alt="">
                                            </div>
                                            {{-- <button onclick="takeshot()" >
                                                Take Screenshot
                                            </button> --}}
                                        </div>
                                        <div id="output"></div>
                                        <script>
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
                                            //Make the DIV element draggagle:
                                            dragElement(document.getElementById("mydiv"));
                                        
                                            function dragElement(elmnt) {
                                                var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
                                                if (document.getElementById(elmnt.id + "header")) {
                                                    /* if present, the header is where you move the DIV from:*/
                                                    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
                                                } else {
                                                    /* otherwise, move the DIV from anywhere inside the DIV:*/
                                                    elmnt.onmousedown = dragMouseDown;
                                                }
                                        
                                                function dragMouseDown(e) {
                                                    e = e || window.event;
                                                    e.preventDefault();
                                                    // get the mouse cursor position at startup:
                                                    pos3 = e.clientX;
                                                    pos4 = e.clientY;
                                                    document.onmouseup = closeDragElement;
                                                    // call a function whenever the cursor moves:
                                                    document.onmousemove = elementDrag;
                                                }
                                        
                                                function elementDrag(e) {
                                                    e = e || window.event;
                                                    e.preventDefault();
                                                    // calculate the new cursor position:
                                                    pos1 = pos3 - e.clientX;
                                                    pos2 = pos4 - e.clientY;
                                                    pos3 = e.clientX;
                                                    pos4 = e.clientY;
                                                    // set the element's new position:
                                                    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                                                    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
                                                }
                                        
                                                function closeDragElement() {
                                                    /* stop moving when mouse button is released:*/
                                                    document.onmouseup = null;
                                                    document.onmousemove = null;
                                                }
                                                }
                                            </script>
                                        @endif
                                    </div>

                                                        
                                    
                                    
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary w-50 mt-2"><div wire:loading wire:target="uploadImage" wire:key="uploadImage"><i class="fa fa-spinner fa-spin"></i></div> Hochladen</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <div class="card" style="height: 58vh;">
                                    <div class="card-header">Alle Bilder</div>
                                    <div class="card-body">
                                        @if (!$images == [])
                                            <div class="row">
                                                @foreach ($images as $image)
                        
                                                    <div class="col-md-2 mb-4">
                                                        <img src="{{ asset('uploads/image_uploads') }}/{{ $image->image }}" class="img-fluid" alt="">
                                                    </div>
                                                    
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    Keine Bilder gefunden
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>