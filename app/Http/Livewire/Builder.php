<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

use Livewire\Component;

use Auth;

use App\Models\Announcement;

class Builder extends Component
{

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

## fülle erst, nach und nach den array um ihn später complett in die request zu schicken!"

    public function mount() {

        $user = Auth::User();

        array_push($this->addressArrayOne, [
            "salutation" => $this->salutation,
            "title" => $this->title,
            "company" => $this->company,
            "street" => $this->street,
            "number" => $this->number,
            "postcode" => $this->postcode,
            "city" => $this->city,
        ]);

        array_push($this->addressArrayTwo, [
            "salutation" => $user->salutation,
            "title" => $user->title,
            "first_name" => $user->first_name,
            "last_name" => $user->last_name,

            "street" => isset($user->address->street)?$user->address->street:"fakestreet",
            "number" => isset($user->address->number)?$user->address->number:1,
            "postcode" => isset($user->address->postcode)?$user->address->postcode:12345,
            "city" => isset($user->address->city)?$user->address->city:"FakeTown",
        ]);
    }

## Mount ist wie Construcktor, wird beim startup ausgeführt
    // public function mount(Request $r, $name)
    // {
    //     $this->name = $r->input('name', $name);
    // }

    public function setJob() {
        $this->job = "Chiko";
    }


    public function submit()
    {
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
  
        // Contact::create($data);
        $user = Auth::User();
        $data = Announcement::create([
            'user_id' => $user->id,
            'address_id' => 1,
    
            'company' => $this->company,
            'job' => "MeineArbeit",
            'contact' => "Herr Martin",
            'type' => "Vollzeit",
    
            'start' => "bla",
            'body' => "bla",
            'end' => "bla",
        ]);

        $string = "announcement/$data->id";


        return redirect()->to($string);
  
        ##return redirect()->to('announcement', ['id' => $data->id]);
    }

    public function create()
    {
        $user = Auth::User();

        return Announcement::create([
            'user_id' => $user->id,
            'address_id' => 1,
    
            'company' => "WunschFirma",
            'job' => "MeineArbeit",
            'contact' => "Herr Martin",
            'type' => "Vollzeit",
    
            'start' => "bla",
            'body' => "bla",
            'end' => "bla",
        ]);
    }

    public function render()
    {
        return view('livewire.builder');
    }
}
