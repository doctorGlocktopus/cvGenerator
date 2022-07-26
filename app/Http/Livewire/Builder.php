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
    public $code;

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


    public $address;

    public $templates;

    public $announcement;

    public $json;

    public $message;

    public function mount($id = NULL) {
        $this->user = Auth::user();
        $this->templates = Template::all()->sortBy("name");;
        if($id){
            if(Announcement::find($id))
            {
                $this->announcement = Announcement::find($id);
                $this->step = 3;     
            }            
        }        
        else {
            if($this->user->address_id == NULL) {
                $this->step = 0;
            } else {
                $this->step = 1;
            }
        }

    }

    public function update() {
        $data = Announcement::find($this->announcement->id);

        $comboContact = $this->contactGender." ".$this->contact;

        dd($this->announcement->start);
        $data->update([  
            // 'company' => $this->company,
            // 'job' => $this->job,
            // 'contact' => $comboContact,
            // 'type' => $this->type,

            'start' => $announcement->start,
            'body' => $this->body,
            'end' => $this->end,

            'temp' => "elegant Proffesionel",
        ]);
        dd($data);
    }

    public function submit() {   
        ##$this->validate();


        $this->validate([
            'company' => 'required',
            'job' => 'required',
            'contact' => 'required',
            'type' => 'required',
            'start' => 'required',
            'body' => 'required',
        ]);


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
        if(        
            $this->validate([
            'street' => 'required|String|Min:5',
            'number' => 'required|Integer',
            'postcode' => 'required|Integer|Min:5',
            'city' => 'required|String',
            ])
        ) {
            $this->step = 2;
        }
    }

    
    public function address() {
        $street = $this->street;
        $street .=  " $this->number";

        $this->validate([
            'street' => 'required|Min:5',
            'postcode' => 'required|Integer|Min:5',
            'city' => 'required|String',
        ]);

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
