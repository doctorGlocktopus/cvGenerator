@extends('layouts.app')
@livewireScripts
@livewireStyles

<div class="doc">
    <livewire:builder />
</div>

{{--
<div wire:ignore.self id="studentModal" tabindex="0" aria-labelledby="studentModalLabel" style="position: absolute;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Lass uns gemeinsam die Adresse hinzufügen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveStudent">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Firmen Name</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>ggf Ansprechpartner</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Straße</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Postleitzahl</label>
                        <input type="text" wire:model="course" class="form-control">
                        @error('course') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Ort</label>
                        <input type="text" wire:model="course" class="form-control">
                        @error('course') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" wire:click="closeModal" data-bs-target="#studentModal">
                        Addresse abschicken
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

    @section ('content')
    <div class="doc">
        <div class="docContainer">

            <div class="flex spaceBetweeen addressLine">
                <div class="address">
                    Accenture Dienstleistungen GmbH<br>
                    Augustenstr. 1<br>
                    70178 Stuttgart<br>
                </div>
                <div class="myAddress">
                    Fabian Laske<br>
                    Wernerstr. 6<br>
                    70469 Stuttgart
                </div>
            </div>

            <div class="date">Stuttgart den, {{ date('d-m-Y') }}</div>

            <div class="letter">
                <br>
                <br>
                <!-- type + job -->
                Bewerbung als Cloud Service Developer
                <br>
                <br>
                <br>
                <!-- contact -->
                Sehr geehrter Herr Bergmann,
                <br>
                <br>
                <!-- introduction -->
                die Aussicht bei einem so modernen Unternehmen wie der Accenture Dienstleistungen GmbH den Einstieg in ein für mich sehr attraktives Berufsfeld zu erhalten, finde ich spannend und halte es für die optimale Herausforderung.
                <br>
                <!-- body -->
                Ich besitze sehr umfangreiches Wissen in PHP, HTML, CSS und Javascript.
                Dieses wende ich unter Einsatz der Frameworks Angular 2 und Laravel an um eine Cloud fähige Business Software zu entwickeln.
                Zu meinen täglichen Aufgaben gehörten neben der Front- und Backend Entwicklung, auch die optimierung für Suchmaschinen sowie die Gestaltung der Layouts für Webauftritte.
                <br>
                <!-- end -->
                Im Juni 2022 werde ich voraussichtlich Ausbildung abschließen.
                Ich bin überzeugt den Anforderungen gerecht zu werden, über ein persönliches Gespräch würde ich mich sehr freuen.
                <br>
                <br>
                Mit freundlichen Grüßen,
                <br>
                <br>
                <br>
                <br>
                Fabian Laske
            </div>
        </div>
    </div> --}}
{{-- @endsection --}}
