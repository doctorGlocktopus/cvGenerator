<div>
    <script>
    $( window ).on( "load", function() {
            var element = document.getElementById('doc');
        if(element.offsetHeight >= 1123){
            document.getElementById("doc").style.height = "unset";
        }

    });

    // function temp($i) {
    //     console.log($i);
    //     @this.$announcement->temp = $i;
    // }
    function MyPrintFunction()
    {
        var windowContent = '<!DOCTYPE html>';
        //Starting HTML Tags
        windowContent += '<html>'
        
        //Setting Print Page Title
        windowContent += '<head><title>Print Content</title></head>';
        
        //Starting Body Tag
        windowContent += '<body>'
        
        //Getting Div HTML
        windowContent +=  document.getElementById("doc").innerHTML;
        
        //Closing Body Tag and HTML Tag
        windowContent += '</body>';
        windowContent += '</html>';
        
        //Calling Print Window
        var printWin = window.open('','','fullscreen=yes');
        
        //Opening Print Window
        printWin.document.open();
        
        //Adding Content in Print Window
        printWin.document.write(windowContent);
        
        //Closing Print Window
        printWin.document.close();
        
        //Focusing User to Print Window
        printWin.focus();
        
        //Calling Default Browser Printer
        printWin.print();
        setTimeout(function(){mywindow.print();},1000);
        //Closing Print Window
        printWin.close();
    }
                
    </script>
    
    <div class="padding1pc w55 grey flex">
        <button class="btn btn-primary" onclick="MyPrintFunction()" id="print"> Print</button>
        <button class="btn btn-primary" wire:click="temp('klassischBrieffenster')">klassisch Sichtfenter</button>
        <button class="btn btn-primary" wire:click="temp('klassisch')">Weblayout ohne Sichtfenter</button>
    </div>

<div>
    @if($announcement->temp == "klassischBrieffenster")
        <div>
            <div class="doc flex">
                <div  id="doc" class="docContainer">
                    <div class="flex spaceBetween addressLine">
                        <div class="address">
                            {{ $announcement->company }}<br>
                            {{ $announcement->address->street }} {{ $announcement->address->number }}<br>
                            {{ $announcement->address->postcode }} {{ $announcement->address->city }}<br>
                        </div>
                        <div class="myAddress">
                            {{ $user->first_name }} {{ $user->last_name }}<br>
                            {{ $user->address->street }} {{ $user->address->number }}<br>
                            {{ $user->address->postcode }} {{ $user->address->city }}<br>
                        </div>
                    </div>

                    <div class="date">{{ $user->address->city }} den, {{ date('d.m.Y') }}</div>
                        {{-- user_id	name	street	postcode	country	job	start	contact	type	body	end	 --}}
                    <div class="letter">
                        <br>
                        <br>
                        <!-- type + job -->
                        Bewerbung als {{$announcement->job}} in {{$announcement->type}}
                        <br>
                        <br>
                        <br>
                        <!-- contact -->
                        Sehr geehrter {{$announcement->contact}},
                        <br>
                        <br>
                        <!-- start -->
                        <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->start)) !!}</span>
                        
                        <br>
                        <br>
                        <!-- body -->
                        <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->body)) !!}</span>
                        <!-- end -->
                        <br>
                        <br>
                        <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->end)) !!}</span>
                        <br>
                        <br>
                        Mit freundlichen Grüßen,
                        <br>
                        <br>
                        <br>
                        <br>
                        {{ $user->first_name }} {{ $user->last_name }}
                    </div>
                </div>
                <livewire:list-view />
            </div>
        </div>
    @endif
    @if($announcement->temp == "klassisch")
    <div>
        <div id="element" class="doc flex">

            <div id="doc" class="webContainer">
                <div class="dekoBalken"></div>
                <div class="flex spaceBetween">
                    <h3>
                        <!-- type + job -->
                        Bewerbung als {{$announcement->job}}<br>in {{$announcement->type}}
                    </h3>
                    <div class="addressLineRight">
                        <div>
                            <span class="fontSize90pc">Empfänger:</span><br>
                            <div class="textRight pTop1pc">
                                {{ $announcement->company }}<br>
                                {{ $announcement->address->street }} {{ $announcement->address->number }}<br>
                                {{ $announcement->address->postcode }} {{ $announcement->address->city }}<br>
                            </div>
                        </div>
                        <div class="pTop20pc">
                            <span class="fontSize90pc">Absender:</span><br>
                            <div class="textRight pTop1pc">
                                {{ $user->first_name }} {{ $user->last_name }}<br>
                                {{ $user->address->street }} {{ $user->address->number }}<br>
                                {{ $user->address->postcode }} {{ $user->address->city }}<br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="date pTop10pc">{{ $user->address->city }} den, {{ date('d.m.Y') }}</div>
                    {{-- user_id	name	street	postcode	country	job	start	contact	type	body	end	 --}}
                <div class="letter">
                    <br>
                    <br>
                    <!-- contact -->
                    Sehr geehrter {{$announcement->contact}},
                    <br>
                    <br>
                    <!-- start -->
                    <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->start)) !!}</span>
                    
                    <br>
                    <br>
                    <!-- body -->
                    <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->body)) !!}</span>
                    <!-- end -->
                    <br>
                    <br>
                    <span class="input" role="textbox" contenteditable>{!! nl2br(e($announcement->end)) !!}</span>
                    <br>
                    <br>
                    Mit freundlichen Grüßen,
                    <br>
                    <br>
                    <br>
                    <br>
                    {{ $user->first_name }} {{ $user->last_name }}
                </div>
            </div>
            <livewire:list-view />
        </div>   
    </div>
        @endif
    </div>
</div>
