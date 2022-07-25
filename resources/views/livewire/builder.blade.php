<div>
<div class="flex spaceAround flexStart">
    <script>
        // Buff manage the Modals
        function buff(hit) {
            @this.buff = hit;
        }

        function blend() {
            console.log(@this.start);
            @this.start.replace("<br>", /\n/g );
        }


    </script>
    
    @if($step == 0)
        <div class="flex columnD padding1pc minW800">
            <h3>Wir brauchen zu erst deine eigene Adresse</h3>
            <form wire:submit.prevent="address">
                <div class="inLineFlex">
                    <div>
                        <label>Straße</label>
                        <input type="text" class="form-control" placeholder="Straße" wire:model.lazy="street">
                        @error('Straße') <span class="text-danger">{{ $message }}</span> @enderror          

                        <label>Hausnummer</label>
                        <input type="number" class="form-control" placeholder="Hausnummer" wire:model.lazy="number">
                        @error('Hausnummer') <span class="text-danger">{{ $message }}</span> @enderror          
                    </div>
                </div>

                <div class="inLineFlex">
                    <div class="form-group">
                        <label>Postleitzahl</label>
                        <input type="number" class="form-control" placeholder="Postleitzahl" wire:model.lazy="postcode">
                        @error('Postleitzahl') <span class="text-danger">{{ $message }}</span> @enderror          

                        <label>Stadt</label>
                        <input type="text" class="form-control" placeholder="Stadt / Dorf" wire:model.lazy="city">
                        @error('Stadt') <span class="text-danger">{{ $message }}</span> @enderror          
                    </div>
                </div>

                <div class="pTop1pc">
                    <button type="submit" class="btn btn-primary">Meine Adresse speichern</button>
                </div>
            </form>
        </div>
    @elseif($step == 1)
        <div class="flex columnD padding1pc">
            <h3>Wir brauchen die Adresse des Empfängers</h3>
            <form class="flex columnD" wire:submit.prevent="receiverAddress">
                <div>
                    <div class="flex">
                        <div>
                            <label>Straße</label>
                            <input type="text" class="form-control" placeholder="Straße" wire:model.lazy="street">
                            @error('Straße') <span class="text-danger">{{ $message }}</span> @enderror          
                        </div>
                        <div>
                            <label>Hausnummer</label>
                            <input type="number" class="form-control" placeholder="Hausnummer" wire:model.lazy="number">
                            @error('Hausnummer') <span class="text-danger">{{ $message }}</span> @enderror          
                        </div>
                    </div>


                        <livewire:select2-auto-search/>  

                    {{-- <div class="flex">
                        <div>
                            <label>Postleitzahl</label>
                            <input type="number" class="form-control" placeholder="Postleitzahl" wire:model="postcode">
                            @error('Postleitzahl') <span class="text-danger">{{ $message }}</span> @enderror          
                        </div>
                        <div>
                            <label>Stadt</label>
                            <input type="text" class="form-control" placeholder="Stadt / Dorf" wire:model="city">
                            @error('Stadt') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>  
                    </div>  --}}
                    <div class="pTop1pc">
                        <button  type="submit" class="pTop1pc btn btn-primary">Empfänger speichern</button>
                    </div>
                </div>
            </form>
        </div>
    @endif
    @if($step == 2)
        <div class="flex columnD padding1pc">
            <h3>Daten des Empfängers</h3>
            <form wire:submit.prevent="submit">
                    @if($buff == 1)
                        <div class="form-group">
                            <label>Firmenname</label>
                            <input type="text" class="form-control" placeholder="Firma" wire:model="company">
                            @error('Firma') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="pTop1pc">
                            <a class="btn btn-primary" onclick="buff(2)">nächster Schritt</a>
                        </div>
                    @endif
                @if($buff == 2)
                    <div class="form-group">
                        <label>gewünschter Arbeitplatz</label>
                        <input type="text" class="form-control" placeholder="Arbeitsplatz" wire:model="job">
                        @error('Arbeitsplatz') <span class="text-danger">{{ $message }}</span> @enderror
                        <label>Beschäftigungsart</label>
                        @if(!$type == "eigene")
                        <select class="form-control form-select" wire:model="type" aria-label="Beschäftigungsart">
                            <option selected> Beschäftigungsart wählen</option>
                            <option value="Vollzeit">Vollzeit</option>
                            <option value="Teilzeit">Teilzeit</option>
                            <option value="450€ Basis">450€ Basis</option>
                            <option value="eigene">eigene Angabe wählen</option>
                        </select>
                        @else
                            <input class="form-control form-select" wire:model="type" aria-label="Beschäftigungsart">
                        @endif
                        @error('Beruf') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="pTop1pc">
                        <a class="btn btn-secondary" onclick="buff(1)">zurück</a>
                        <a class="btn btn-primary" onclick="buff(3)">nächster Schritt</a>
                    </div>
                @endif
                @if($buff == 3)
                    <div class="form-group">
                            <div class="flex">
                                <div>
                                    <label>Anrede</label>
                                    @if(!$contactGender == "eigene")
                                    <select class="form-control form-select w33" wire:model="contactGender" aria-label="Geschlecht">
                                        <option> Geschlecht wählen</option>
                                        <option value="Herr">Herr</option>
                                        <option value="Frau">Frau</option>
                                        <option value="eigene">eigene Definition</option>
                                    </select>
                                    @else
                                        <input class="form-control form-select" wire:model="contactGender" aria-label="Beschäftigungsart">
                                    @endif
                                </div>
                                <div>
                                    <label>Nachname</label>
                                    <input type="text" class="form-control" placeholder="Kontaktperson" wire:model="contact">
                                </div>
                            </div>
                        @error('Kontaktperson') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="pTop1pc">
                        <a class="btn btn-secondary" onclick="buff(2)">zurück</a>
                        <a class="btn btn-primary" onclick="buff(4)">nächster Schritt</a>
                    </div>
                @endif
                @if($buff == 4)
                    <div class="form-group">
                        <label>Einleitung</label>
                        <select class="form-control form-select" wire:model.lazy="start" aria-label="Einleitung">
                            <option disabled>Einleitung wählen</option>
                            @foreach($templates as $temp)
                                <option value="{{$temp->start}}">{{$temp->name}}</option>
                            @endforeach
                        </select>
                        <textarea onchange="blend()" cols="75" rows="15" class="form-control" placeholder="Einleitung" wire:model="start"></textarea>
                        @error('Einleitung') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="pTop1pc">
                        <a class="btn btn-secondary" onclick="buff(3)">zurück</a>
                        <a class="btn btn-primary" onclick="buff(5)">nächster Schritt</a>
                    </div>
                @endif
                @if($buff == 5)
                    <div class="form-group">
                        <label>Hauptteil</label>
                        <select class="form-control form-select" wire:model.lazy="body" aria-label="Hauptteil">
                            <option disabled>Hauptteil wählen</option>
                            @foreach($templates as $temp)
                                <option value="{{$temp->body}}">{{$temp->name}}</option>
                            @endforeach
                        </select>
                        <textarea onchange="blend()" cols="75" rows="15" class="form-control" placeholder="Hauptteil" wire:model="body"></textarea>
                        @error('Hauptteil') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="pTop1pc">
                        <a class="btn btn-secondary" onclick="buff(4)">zurück</a>
                        <a class="btn btn-primary" onclick="buff(6)">nächster Schritt</a>
                    </div>
                @endif
                @if($buff == 6)
                    <div class="form-group">
                        <label>Schluss</label>
                        <select class="form-control form-select" wire:model.lazy="end" aria-label="Schluss">
                            <option disabled>Schluss wählen</option>
                            @foreach($templates as $temp)
                                <option value="{{$temp->end}}">{{$temp->name}}</option>
                            @endforeach
                        </select>
                        <textarea onchange="blend()" cols="75" rows="15" class="form-control" placeholder="Schluss" wire:model="end"></textarea>
                        @error('Schluss') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>
                    <div class="pTop1pc">
                        <a class="btn btn-secondary" onclick="buff(5)">zurück</a>  
                        <button type="submit" class="btn btn-primary">Bewerbung abspeichern</button>
                    </div>
                @endif
            </form>
        </div>
    @elseif($step == 3)
    <div>
        <div class="doc">
            <div class="docContainer">
                <div class="flex spaceBetweeen addressLine">
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
                    <form wire:submit.prevent="update">
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
                    </form>
                    {{-- <br>
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
                    {{ $user->first_name }} {{ $user->last_name }} --}}
                </div>
            </div>
        </div>
    @endif
        @if($step == 2)
            <div class="docContainer">
                <div class="myAddress">
                    {{ $user->first_name }} {{ $user->last_name }}<br>
                    {{ $user->address->street }} {{ $user->address->number }}<br>
                    {{ $user->address->postcode }} {{ $user->address->city }}<br>
                </div>
                @if(!$company == "")
                    <div class="myModal fade">
                        <label>Firma und Stelle</label><br>
                        {{$company}} als {{$job}} in {{$type}}
                    </div>
                @endif      
                @if(!$contact == "")
                    <div class="myModal fade">
                        <label>Kontaktperson</label><br>
                        {{$contactGender}} {{$contact}}
                    </div>
                @endif           
                @if(!$start == "")
                    <div class="myModal fade">
                        <label>Einleitung:</label><br>
                        {!! nl2br(e($start)) !!}
                    </div>
                @endif
                @if(!$body == "")
                    <div class="myModal fade">
                        <label>Hauptteil:</label><br>
                        {!! nl2br(e($body)) !!}
                    </div>
                @endif
                @if(!$end == "")
                    <div class="myModal fade">
                        <label>Schluss:</label><br>
                        {!! nl2br(e($end)) !!}
                    </div>
                @endif
            </div>
        @else
        <div>
            <livewire:list-view />
        </div>
        @endif
    </div>
    
</div>

