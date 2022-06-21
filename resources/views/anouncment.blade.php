@extends('layouts.app')
<h1>{{$error}}</h1>
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
