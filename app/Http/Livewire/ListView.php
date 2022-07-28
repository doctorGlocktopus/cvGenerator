<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Auth;

use App\Models\Announcement;

class ListView extends Component
{
    public $close;
    public $jump = 0;

    public function mount() {
        $this->user = Auth::user();
    }
    public function choose($id) {
        $this->announcement = Announcement::find($id);

    }

    public function test() {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.list-view');
    }

}
