<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use App\Models\Address;
use Auth;

class Modal extends Component

{
    public $gate;

    public $inputValue;

    public $buttonName;

    public $i;

    public $close;

    public $content;

    public function mount($inputValue= NULL, $listId= NULL) {
        if($inputValue == "listDelete") {
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
        $this->emit('delete');
    }

    public function userDelete() {
        $user = Auth::User();

        $announcements = $user->announcement;

        foreach($announcements as $i) {
            $i->forceDelete();
            Address::where("id", $i->address_id)->forceDelete();
        }

        $user->forceDelete(); 
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
