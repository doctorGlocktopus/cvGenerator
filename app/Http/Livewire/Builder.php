<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

use Livewire\Component;

use Auth;

class Builder extends Component
{

    public $addressArrayOne = [];

    public $addressArrayTwo = [];


    public $name = "Jelly";

    public $street = "blablastreet";

    public $number = 6;

    public $postcode = 70469;

    public $city = "Stuttgart";


## fülle erst, nach und nach den array um ihn später complett in die request zu schicken!"


    public $loud = false;

    public $greeting = ["Hello"];


    public function mount() {
        array_push($this->addressArrayOne, [
            "name" => $this->name,
            "street" => $this->street,
            "number" => $this->number,
            "postcode" => $this->postcode,
            "city" => $this->city,
        ]);
        array_push($this->addressArrayTwo, [
            "name" => $this->name,
            "street" => $this->street,
            "number" => $this->number,
            "postcode" => $this->postcode,
            "city" => $this->city,
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
