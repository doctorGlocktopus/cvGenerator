
{{ $addressArrayOne[0]["salutation"] }}



<div class="doc">
    <div class="docContainer">

        <div class="flex spaceBetweeen addressLine">
            <div class="address">
                @if($addressArrayOne[0]["salutation"])
                    {{ $addressArrayOne[0]["salutation"] }}.
                @endif
                {{ $addressArrayOne[0]["title"] }} {{ $addressArrayOne[0]["first_name"] }} {{ $addressArrayOne[0]["last_name"] }}<br>
                {{ $addressArrayOne[0]["street"] }} {{ $addressArrayOne[0]["number"] }}<br>
                {{ $addressArrayOne[0]["postcode"] }} {{ $addressArrayOne[0]["city"] }}<br>
            </div>
            <div class="myAddress">
                {{ $addressArrayOne[0]["title"] }}  {{ $addressArrayTwo[0]["first_name"] }} {{ $addressArrayTwo[0]["last_name"] }}<br>
                {{ $addressArrayTwo[0]["street"] }} {{ $addressArrayTwo[0]["number"] }}<br>
                {{ $addressArrayTwo[0]["postcode"] }} {{ $addressArrayTwo[0]["city"] }}<br>
            </div>
        </div>

        <div class="date">{{ $addressArrayTwo[0]["city"] }} den, {{ date('d.m.Y') }}</div>
{{-- user_id	name	street	postcode	country	job	start	contact	type	body	end	 --}}
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
</div>




{{-- Data Binding

<div>
    <input wire:model="name" type="text">

    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    <button wire:click="resetName($event.target.innerText)">Reset Name mit magic event</button>

    <button wire:mouseenter="resetName('Bingo')">mousenter Bingo</button>

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button>Reset Name to Bingo</button>
    </form>

    {{ implode(', ', $greeting) }} {{ $name }} @if ($loud) ! @endif
</div>


<div style="height: 500px"></div>




Lifecycle Hooks

<div>
    <input wire:model="name" type="text">

    Hello Lifecycle Hooks {{ $name }}

</div>





<div style="height: 500px"></div>






<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lass uns zuerst die Adresse des Empfängers eintragen</div>
                <div class="panel-body">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" wire:model="name" type="text" placeholder="Name">

                    <label>Straße</label>
                    <input id="name" class="form-control" name="street" type="text" placeholder="Straße">

                    <label>Stadt</label>
                    <input id="name" class="form-control" name="city" type="text" placeholder="Stadt">

                    <label>Postleitzahl</label>
                    <input id="name" class="form-control" name="postcode" type="text" placeholder="Postleitzahl">
                </div>
                <button class="btn btn-primary" wire:click="address1">Produkt anlegen</button>
            </div>
        </div>
    </div>
</div>
<form wire:submit.prevent="save">
    <input type="text" wire:model="post.title">

    <textarea wire:model="post.content"></textarea>

    <button type="submit">Save</button>
</form>
</div> --}}
