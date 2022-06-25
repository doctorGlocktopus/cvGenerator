<?php

namespace App\Http\Livewire;

// use Illuminate\Http\Request;

use Livewire\Component;

use Auth;

use App\Models\Address;

use App\Models\Announcement;

use Illuminate\Http\Request;

class Builder extends Component
{
    public $template = "Elegant professionell";

    public $addressArrayOne = [];

    public $addressArrayTwo = [];

        public $salutation = "Herr";

        public $title = "Dr.";

        public $first_name = "Vorname";

        public $last_name = "Nachname";

        public $street = "Fakestreet";

        public $number = 16;

        public $postcode = 12345;

        public $city = "FakeTown";

        public $company = "WunschFirma";

        public $job = "WunschJob";

        public $contact = "Herr Jelly";

        public $type = "Vollzeit";

        public $start = "die Aussicht bei einem so modernen Unternehmen wie der Accenture Dienstleistungen GmbH den Einstieg in ein für mich sehr attraktives Berufsfeld zu erhalten, finde ich spannend und halte es für die optimale Herausforderung.";

        public $body = "Ich besitze sehr umfangreiches Wissen in PHP, HTML, CSS und Javascript.
        Dieses wende ich unter Einsatz der Frameworks Angular 2 und Laravel an um eine Cloud fähige Business Software zu entwickeln.
        Zu meinen täglichen Aufgaben gehörten neben der Front- und Backend Entwicklung, auch die optimierung für Suchmaschinen sowie die Gestaltung der Layouts für Webauftritte.<br>";

        public $end = "Im Juni 2022 werde ich voraussichtlich Ausbildung abschließen.
        Ich bin überzeugt den Anforderungen gerecht zu werden, über ein persönliches Gespräch würde ich mich sehr freuen.";





    public $name;
    public $email;
  
    public function submit(Request $request) {   


        // validation nach create mal anschauen komplexes thema
        // $data = $this->validate([
        //     'user_id' => 'required',
        //     'address_id' => 'required',
        //     'company' => 'required',
        //     'job' => 'required',
        //     'contact' => 'required',
        //     'type' => 'required',
        //     'start' => 'required',
        //     'body' => 'required',
        // ]);

        $user = Auth::User();

        $user->address = NULL;

        if($user->address) {
            $address_id = $user->address->id;
        } else {
            $address = Address::create([
                'street' => "fakestreet",
                'number' => 1,
                'postcode' => 71287,
                'country' => "Weissach",
            ]);

            $address_id = $address->id;
        }

        $data = Announcement::create([
            'user_id' => $user->id,
            'address_id' => $address_id,
    
            'company' => "sss",
            'job' => "MeineArbeit",
            'contact' => "Herr Martin",
            'type' => "Vollzeit",
    
            'start' => "bla",
            'body' => "bla",
            'end' => "bla",
        ]);
        
        return redirect()->to('/announcement'."/".$data->id);
        
    }

    public function render()
    {
        return view('livewire.builder');
    }
}
