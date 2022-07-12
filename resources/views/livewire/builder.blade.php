{{$blast}}
<div>
    <div class="modalContainer">
        @if($user->announcement)
            <div class="myModal">
                <h4>Deine Bewerbungen</h4>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firma</th>
                        <th scope="col">Anstellung</th>
                        <th scope="col">Datum</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($user->announcement as $i)
                        <tr wire:click="choose({{$i->id}})">
                            <th scope="row">{{$i->id}}</th>
                            <td>{{$i->company}}</td>
                            <td>{{$i->job}}</td>
                            <td>{{date_format($i->created_at,'d.m.Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if(!$company == "")
            <div class="myModal">
                <label>Firma und Stelle</label><br>
                {{$company}} als {{$job}} in {{$type}}
            </div>
        @endif      
        @if(!$contact == "")
            <div class="myModal">
                <label>Kontaktperson</label><br>
                {{$contactGender}} {{$contact}}
            </div>
        @endif           
        @if(!$start == "")
            <div class="myModal">
                <label>Einleitung:</label><br>
                {{$start}}
            </div>
        @endif
        @if(!$body == "")
            <div class="myModal">
                <label>Hauptteil:</label><br>
                {{$body}}
            </div>
        @endif
        @if(!$end == "")
            <div class="myModal">
                <label>Schluss:</label><br>
                {{$end}}
            </div>
        @endif

    </div>

    @if($step == 0)
        <div class="flex columnD padding10pc minW800">
            <h3>Wir brauchen zu erst deine eigene Adresse</h3>
            <form wire:submit.prevent="address">

                <div class="inLineFlex">
                    <div>
                        <label>Straße</label>
                        <input type="text" class="" placeholder="Straße" wire:model="street">
                        @error('Straße') <span class="text-danger">{{ $message }}</span> @enderror          

                        <label>Hausnummer</label>
                        <input type="number" class="" placeholder="Hausnummer" wire:model="number">
                        @error('Hausnummer') <span class="text-danger">{{ $message }}</span> @enderror          
                    </div>
                </div>

                <div class="inLineFlex">
                    <div class="form-group">
                        <label>Postleitzahl</label>
                        <input type="number" class="form-control" placeholder="Postleitzahl" wire:model="postcode">
                        @error('Postleitzahl') <span class="text-danger">{{ $message }}</span> @enderror          

                        <label>Stadt</label>
                        <input type="text" class="form-control" placeholder="Stadt / Dorf" wire:model="city">
                        @error('Stadt') <span class="text-danger">{{ $message }}</span> @enderror          
                    </div>
                </div>

            
                <button type="submit" class="btn btn-primary">Meine Adresse speichern</button>
            </form>
        </div>
    @elseif($step == 1)
        <div class="flex columnD padding10pc minW800">
            <h3>Wir brauchen die Adresse des Empfängers</h3>
            <form wire:submit.prevent="receiverAddress">

                <div class="inLineFlex">
                    <div class="form-group">
                        <label>Straße</label>
                        <input type="text" class="form-control" placeholder="Straße" wire:model="street">
                        @error('Straße') <span class="text-danger">{{ $message }}</span> @enderror          

                        <label>Hausnummer</label>
                        <input type="number" class="form-control" placeholder="Hausnummer" wire:model="number">
                        @error('Hausnummer') <span class="text-danger">{{ $message }}</span> @enderror          
                    </div>
                </div>

                <div class="inLineFlex">
                    <div class="form-group">
                        <label>Postleitzahl</label>
                        <input type="number" class="form-control" placeholder="Postleitzahl" wire:model="postcode">
                        @error('Postleitzahl') <span class="text-danger">{{ $message }}</span> @enderror          

                        <label>Stadt</label>
                        <input type="text" class="form-control" placeholder="Stadt / Dorf" wire:model="city">
                        @error('Stadt') <span class="text-danger">{{ $message }}</span> @enderror          
                    </div>
                </div>

            
                <button type="submit" class="btn btn-primary">Empfänger speichern</button>
            </form>
        </div>
    @endif

    @if($step == 2)
        <div class="flex columnD padding10pc minW800">
            <h3>Daten des Empfängers</h3>
            <form wire:submit.prevent="submit">

                <div class="form-group">
                    <label>Firmenname</label>
                    <input type="text" class="form-control" placeholder="Firma" wire:model="company">
                    @error('Firma') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>gewünschter Arbeitplatz</label>
                    <input type="text" class="form-control" placeholder="Arbeitsplatz" wire:model="job">
                    @error('Arbeitsplatz') <span class="text-danger">{{ $message }}</span> @enderror
                    <label>Beschäftigungsart</label>
                    @if(!$type == "eigene")
                    <select class="form-control form-select" wire:model="type" aria-label="Beschäftigungsart">
                        <option disabled> Beschäftigungsart wählen</option>
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

                <div class="form-group">
                        <div class="flex">
                            <div>
                                <label>Anrede</label>
                                @if(!$contactGender == "eigene")
                                <select class="form-control form-select w33" wire:model="contactGender" aria-label="Geschlecht">
                                    <option disabled>Geschlecht wählen</option>
                                    <option selected value="Herr">Herr</option>
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


                <div class="form-group">
                    <label>Einleitung</label>
                    <select class="form-control form-select w33" wire:model="start" aria-label="Einleitung">
                        <option disabled>Einleitung wählen</option>
                        @foreach($templates as $temp)
                            <option value="{{$temp->start}}">{{$temp->name}}</option>
                        @endforeach
                    </select>
                    <textarea class="form-control" placeholder="Einleitung" wire:model="start"></textarea>
                    @error('Einleitung') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Hauptteil</label>
                    <select class="form-control form-select w33" wire:model="body" aria-label="Hauptteil">
                        <option disabled>Hauptteil wählen</option>
                        @foreach($templates as $temp)
                            <option value="{{$temp->body}}">{{$temp->name}}</option>
                        @endforeach
                    </select>
                    <textarea class="form-control" placeholder="Hauptteil" wire:model="body"></textarea>
                    @error('Hauptteil') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Schluss</label>
                    <select class="form-control form-select w33" wire:model="end" aria-label="Schluss">
                        <option disabled>Schluss wählen</option>
                        @foreach($templates as $temp)
                            <option value="{{$temp->end}}">{{$temp->name}}</option>
                        @endforeach
                    </select>
                    <textarea class="form-control" placeholder="Schluss" wire:model="end"></textarea>
                    @error('Schluss') <span class="text-danger">{{ $message }}</span> @enderror

                </div>  
                <button type="submit" class="btn btn-primary">Bewerbung abspeichern</button>
            </form>
        </div>
    @endif
</div>