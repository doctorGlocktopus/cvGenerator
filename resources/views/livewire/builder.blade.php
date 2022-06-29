@if($test == 1)
<div class="flex columnD padding10pc minW800">

    <h3>Wir brauchen zu erst deine eigene Adresse</h3>
    <form wire:submit.prevent="address">

        <div class="inLineFlex">
            <div class="form-group">
                <label>Straße</label>
                <input type="text" class="form-control" placeholder="Straße" wire:model="street">
                @error('Straße') <span class="text-danger">{{ $message }}</span> @enderror          

                <label>Hausnummer</label>
                <input type="number" class="form-control" placeholder="Hausnummer" wire:model="number">
                @error('Hausnumme') <span class="text-danger">{{ $message }}</span> @enderror          
            </div>
        </div>

        <div class="inLineFlex">
            <div class="form-group">
                <label>Postleitzahl</label>
                <input type="number" class="form-control" placeholder="Postleitzahl" wire:model="postcode">
                @error('Postleitzahl') <span class="text-danger">{{ $message }}</span> @enderror          

                <label>Stadt</label>
                <input type="text" class="form-control" placeholder="Stadt / Dorf" wire:model="country">
                @error('Stadt') <span class="text-danger">{{ $message }}</span> @enderror          
            </div>
        </div>

    
        <button type="submit" class="btn btn-primary">Meine Adresse speichern</button>
    </form>
</div>

@else
<div class="flex columnD padding10pc minW800">
    <h3>Adresse des Empfängers</h3>
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
            <select class="form-control form-select" wire:model="type" aria-label="Beschäftigungsart">
                <option value="Vollzeit">Vollzeit</option>
                <option value="Teilzeit">Teilzeit</option>
                <option value="450€ Basis">Divers</option>
            </select>
            @error('Beruf') <span class="text-danger">{{ $message }}</span> @enderror
        </div>



        <div class="form-group">
                <div class="flex">
                    <div>
                        <label>Anrede</label>
                        <select class="form-control form-select w33" wire:model="contactGender" aria-label="Geschlecht">
                            <option value="Herr">Herr</option>
                            <option value="Frau">Frau</option>
                            <option value="Es">Divers</option>
                        </select>
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
            <textarea class="form-control" placeholder="Einleitung" wire:model="start"></textarea>
            @error('Einleitung') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Hauptteil</label>
            <textarea class="form-control" placeholder="Hauptteil" wire:model="body"></textarea>
            @error('Hauptteil') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-group">
            <label>Schluss</label>
            <textarea class="form-control" placeholder="Schluss" wire:model="end"></textarea>
            @error('Schluss') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Save Contact</button>
    </form>
</div>

@endif
