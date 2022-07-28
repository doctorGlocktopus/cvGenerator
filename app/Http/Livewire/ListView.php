<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Auth;

use App\Models\Announcement;

class ListView extends Component
{

    public $jump = 0;

    public function mount() {
        $this->user = Auth::user();
    }

    public function fresh() {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.list-view');
    }

}
