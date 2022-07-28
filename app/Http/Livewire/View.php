<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Auth;

class View extends Component
{
    public $temp;
    public $user;
    public $announcement;

    public function mount($id) {
        $this->announcement = Announcement::find($id);
        $this->temp = $this->announcement->temp;
        $this->user = Auth::User();
    }
    
    public function temp($i) {
        dd(1);
        $this->announcement->temp = $i;
    }

    public function render()
    {
        return view('livewire.view');
    }
}
