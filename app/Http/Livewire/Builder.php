<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

use Livewire\Component;

use Auth;

class Builder extends Component
{

    public $addressArrayOne = [];

    public $addressArrayTwo = [];

        public $salutation = "Herr";

        public $title = "Dr";

        public $first_name = "Jelly";

        public $last_name = "Jelly";

        public $street = "blablastreet";

        public $number = 6;

        public $postcode = 70469;

        public $city = "Stuttgart";

## fülle erst, nach und nach den array um ihn später complett in die request zu schicken!"


    public $loud = false;

    public $greeting = ["Hello"];


    public function mount() {

        $user = Auth::User();

        array_push($this->addressArrayOne, [
            "salutation" => $this->salutation,
            "title" => $this->title,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
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

    public function render()
    {
        return view('livewire.builder');
    }

    public function resetName($name = "Chiko") {
        $this->name = $name;
    }
}
