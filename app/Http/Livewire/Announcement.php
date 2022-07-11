<?php

namespace App\Http\Livewire;

use Auth;

use Illuminate\Http\Request;

use Livewire\Component;

use App\Models\Announcement as anno;

class Announcement extends Component
{
    public Post $post;
 
    public $announcement;

    public $user;

    public $start;

    public $list;

    public $step;
    

    public function mount() {
        $this->list = anno::all();
        $this->user = Auth::user(); 
    }

    public function step($id) {
        $this->step = 1;
        $this->announcement = anno::find($id);
    }

    public function render()
    {
        return view('livewire.announcement');
    }
}
