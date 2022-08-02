<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Auth;

class View extends Component
{
    public $user;
    public $announcement;

    public function mount($id =NULL) {
        $this->user = Auth::User();
        if(!$id == NULL) {
            $this->announcement = Announcement::find($id);
        } else {
            $this->announcement = new Announcement;
        }

    }
    
    public function temp($i) {
        $this->announcement->temp = $i;
    }

    public function render()
    {
        return view('livewire.view');
    }
}
