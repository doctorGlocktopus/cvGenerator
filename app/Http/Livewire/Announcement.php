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

    public function mount() {

        $this->list = anno::all();
        $this->user = Auth::user();
        $this->announcement = anno::where('user_id', $this->user->id)->first();
    }

    public function choose($id) {
        $this->announcement = anno::find($id);
    }

    public function render()
    {
        return view('livewire.announcement');
    }
}
