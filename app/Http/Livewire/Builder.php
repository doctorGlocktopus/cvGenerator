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

    protected $rules = [];

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

    public function placeTemplate($s) {

        // dd($s);
        $this->body = $this->start;
        $this->end = $this->start;
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

            'temp' => "klassischBrieffenster",
        ]);
        dd($data);
    }

    public function submit() {   
        $user = Auth::User();


        $comboContact = $this->contactGender." ".$this->contact;

        $street = $this->street;
        $street .=  " $this->number";

        $this->rules = [
            'street' => 'required|Min:5',
            'number' => 'required|Integer|Min:1',
            'postcode' => 'required|Integer|Min:5',
            'city' => 'required|String'
        ];

        $this->validate();

        $address = Address::create([
            'street' => $this->street,
            'postcode' => $this->postcode,
            'city' => $this->city,
        ]);

        $this->rules = [
            'company' => 'required|String',
            'job' => 'required|String',
            'contactGender' => 'required|String',
            'type' => 'required|String',
            'start' => 'required|String',
            'body' => 'required|String',
            'end' => 'required|String',
        ];

        $this->validate();

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

            'temp' => "klassischBrieffenster",
        ]);
        return redirect()->to('/view'."/".$data->id);        
    }

    public function receiverAddress() {

        $this->rules = [
            'street' => 'required|Min:5',
            'number' => 'required|Integer|Min:1',
            'postcode' => 'required|Integer|Min:5',
            'city' => 'required|String'
        ];

        $this->validate();

        $this->step = 2;
    
    }

    
    public function address() {

        $this->rules = [
            'street' => 'required|Min:5',
            'number' => 'required|Integer|Min:1',
            'postcode' => 'required|Integer|Min:5',
            'city' => 'required|String'
        ];

        $this->validate();

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

    public function setTemp($i) {
            dd($i);
    }

    public function render()
    {
        return view('livewire.builder');
    }
}
