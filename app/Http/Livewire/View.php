<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Auth;

class View extends Component
{
    public $user;
    public $announcement;

    public function mount($id) {
        $this->announcement = Announcement::find($id);
        $this->user = Auth::User();            
   }
    public function render()
    {
        return view('livewire.view');
    }
}
