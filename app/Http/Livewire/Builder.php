<?php

namespace App\Http\Livewire;

// use Illuminate\Http\Request;

use Livewire\Component;

use Auth;

use App\Models\Address;

use App\Models\User;

use App\Models\Announcement;

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

    public $country;

    public $company;

    public $job;

    public $contactGender;

    public $contact;

    public $type;

    public $start;

    public $body;

    public $end;

    public $test;

    public function mount() {
        if(Auth::User()->address_id == NULL) {
            $this->test = 1;
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
                'street' => "fakestreet",
                'number' => 1,
                'postcode' => 71287,
                'country' => "Weissach",
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

    public function render()
    {
        return view('livewire.builder');
    }

    
    public function address()
    {
        $address = Address::create([
            'street' => $this->street,
            'number' => $this->number,
            'postcode' => $this->postcode,
            'country' => $this->country,
        ]);

        User::where('id', '=', Auth::User()->id)->update(['address_id' => $address->id]);

        $this->test = "dasdas";
    }
}
