<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Auth;

use App\Models\Address;

use App\Models\User;

use App\Models\Template;

use App\Models\Announcement;

use Illuminate\Routing\Router;

class Builder extends Component
{

    public $buff = 1;

    public $template = "Elegant professionell";

    public $addressArrayOne = [];

    public $salutation;

    public $title;

    public $first_name;

    public $last_name;

    public $street;

    public $number;

    public $postcode;

    public $city;

    public $company;

    public $job;

    public $contactGender;

    public $contact;

    public $type;

    public $start;

    public $body;

    public $end;

    public $step;

    public $blast;

    public $CLIENT_ID = "TPQZJDKV3MDGMCMKK343YIMFVFAEFB25OMVUJG0IWZ2BP2B5";

    public $CLIENT_SECRET = "4UAK2QRK0H54LNE22XD3JH2504TBA5FQJN1LI3CGQTMUAT3J";

    public $venue_id = "fsq34CTYpSiQvowj4PUG9hFJfJf/XqKM4fSrkWniRLaNqx0=";

    public $address;

    public $templates;

    public $announcement;

    public $json;


    public function mount() {


        $this->user = Auth::user();
        $this->templates = Template::all();

        if($this->user->address_id == NULL) {
            $this->step = 0;
        } else {
            $this->step = 1;
        };
    }

    public function update() {
        dd(1);
    }

    public function choose($id) {
        $this->announcement = Announcement::find($id);
        $this->step = 3;
    }

    public function submit() {   
        ##$this->validate();




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


        $comboContact = $this->contactGender." ".$this->contact;

        $street = $this->street;
        $street .=  " $this->number";

        $address = Address::create([
            'street' => $this->street,
            'postcode' => $this->postcode,
            'city' => $this->city,
        ]);

        $data = Announcement::create([
            'user_id' => $user->id,
            'address_id' => $address->id,
    
            'company' => $this->company,
            'job' => $this->job,
            'contact' => $comboContact,
            'type' => $this->type,

            'start' => $this->start,
            'body' => $this->body,
            'end' => $this->end,

            'temp' => "elegant Proffesionel",
        ]);
        
        return redirect()->to('/announcement'."/".$data->id);
        
    }

    public function receiverAddress() {
        $this->step = 2;
    }

    
    public function address() {
        $street = $this->street;
        $street .=  " $this->number";

        $address = Address::create([
            'street' => $this->street,
            'postcode' => $this->postcode,
            'city' => $this->city,
        ]);

        User::where('id', '=', Auth::User()->id)->update(['address_id' => $address->id]);

        $this->step = 1;
    }

    public function render()
    {
        return view('livewire.builder');
    }
}
