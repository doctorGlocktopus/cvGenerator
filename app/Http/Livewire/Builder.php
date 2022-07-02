<?php

namespace App\Http\Livewire;

// use Illuminate\Http\Request;

use Livewire\Component;

use Auth;

use App\Models\Address;

use App\Models\User;

use App\Models\Announcement;

use Illuminate\Routing\Router;

class Builder extends Component
{
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

    public function mount() {


        $url = 'https://api.foursquare.com/v2/venues/${venue_id}?client_id=${CLIENT_ID}&client_secret=${CLIENT_SECRET}&v=20180323';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response_json, true);

        dd($response);

        // $blast = Route::get(`https://api.foursquare.com/v2/venues/${venue_id}?client_id=${CLIENT_ID}&client_secret=${CLIENT_SECRET}&v=20180323`);

        if(Auth::User()->address_id == NULL) {
            $this->step = 0;
        };
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

        $user->address = NULL;


        if($user->address) {
            $address_id = $user->address->id;
        } else {
            $address = Address::create([
                'street' => "fakestreet 1",
                'postcode' => 71287,
                'city' => "Weissach",
            ]);

            $address_id = $address->id;
        }

        $comboContact = $this->contactGender." ".$this->contact;

        $data = Announcement::create([
            'user_id' => $user->id,
            'address_id' => $address_id,
    
            'company' => $this->company,
            'job' => $this->job,
            'contact' => $comboContact,
            'type' => $this->type,
    
            'start' => $this->start,
            'body' => $this->body,
            'end' => $this->end,
        ]);
        
        return redirect()->to('/announcement'."/".$data->id);
        
    }
    
    public function address()
    {
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
