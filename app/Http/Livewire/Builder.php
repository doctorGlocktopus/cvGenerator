<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

use Livewire\Component;

class Builder extends Component
{
    public $name = "Jelly";

    public $loud = false;

    public $greeting = ["Hello"];

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
