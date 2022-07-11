<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Models\Template;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        Template::create([
            'name' => "elegantProffessionell",
            'start' => "die Aussicht bei einem so modernen Unternehmen wie der Accenture Dienstleistungen GmbH den Einstieg in ein für mich sehr attraktives Berufsfeld zu erhalten, finde ich spannend und halte es für die optimale Herausforderung.",
            'body' => "Ich besitze sehr umfangreiches Wissen in PHP, HTML, CSS und Javascript.
            Dieses wende ich unter Einsatz der Frameworks Angular 2 und Laravel an um eine Cloud fähige Business Software zu entwickeln.
            Zu meinen täglichen Aufgaben gehörten neben der Front- u",
            'end' => "Ich bin überzeugt den Anforderungen gerecht zu werden, über ein persönliches Gespräch würde ich mich sehr freuen.",
        ]);
        Template::create([
            'name' => "schnell schnell",
            'start' => "die Aussicht bei einem so modernen Unternehmen wie der Accenture Dienstleistungen GmbH den Einstieg in ein für mich sehr attraktives Berufsfeld zu erhalten, finde ich spannend und halte es für die optimale Herausforderung.",
            'body' => "Ich besitze sehr umfangreiches Wissen in PHP, HTML, CSS und Javascript.
            Dieses wende ich unter Einsatz der Frameworks Angular 2 und Laravel an um eine Cloud fähige Business Software zu entwickeln.
            Zu meinen täglichen Aufgaben gehörten neben der Front- u",
            'end' => "Ich bin überzeugt den Anforderungen gerecht zu werden, über ein persönliches Gespräch würde ich mich sehr freuen.",
        ]);

        Template::create([
            'name' => "bla bla",
            'start' => "die Aussicht bei einem so modernen Unternehmen wie der Accenture Dienstleistungen GmbH den Einstieg in ein für mich sehr attraktives Berufsfeld zu erhalten, finde ich spannend und halte es für die optimale Herausforderung.",
            'body' => "Ich besitze sehr umfangreiches Wissen in PHP, HTML, CSS und Javascript.
            Dieses wende ich unter Einsatz der Frameworks Angular 2 und Laravel an um eine Cloud fähige Business Software zu entwickeln.
            Zu meinen täglichen Aufgaben gehörten neben der Front- u",
            'end' => "Ich bin überzeugt den Anforderungen gerecht zu werden, über ein persönliches Gespräch würde ich mich sehr freuen.",
        ]);
    }
}
