<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class Modal extends Component

{
    public $gate;

    public $inputValue;

    public $buttonName;

    public $type;

    public $i;

    public $close;

    public $content;


    public function mount($inputValue= NULL, $listId= NULL) {
        if($inputValue == "listDelete") {
            $this->type = "listDelete";
            $this->i = $listId;
        }
        if($inputValue == "") {

        }
         
    }

    public function gate($i) {
        $this->gate = $i;
        $this->content = Announcement::find($this->i);
        // dd($this->content);
    }

    public function delete($id) {
        $data = Announcement::find($id);
        $data->forceDelete();
        $this->gate = 0;
        $this->mount($inputValue= "", $listId= NULL);
    }

    public function render()
    {
        
        return view('livewire.modal');
        // return <<<'blade'
        // <td scope="row" wire:click="delete({{$i->id}})">
        //     <i class="fa fa-trash" aria-hidden="true"></i> dauerhaft löschen
        // </td>
        // blade;
    }
}
