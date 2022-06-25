<div class=" flex columnD padding10pc minW800">
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
            <select class="form-control form-select" wire:model="type" aria-label="Default select example">
                <option value=""></option>
                <option value="Vollzeit">Vollzeit</option>
                <option value="Teilzeit">Teilzeit</option>
                <option value="450€ Basis">Divers</option>
            </select>
            @error('Beruf') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>kennen wir eine Kontaktperson? // optional</label>
                <select class="form-control form-select" wire:model="contactGender" aria-label="Default select example">
                    <option value=""></option>
                    <option value="Herr">Herr</option>
                    <option value="Frau">Frau</option>
                    <option value="Es">Divers</option>
                </select>
            <input type="text" class="form-control" placeholder="Kontaktperson" wire:model="contact">
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
