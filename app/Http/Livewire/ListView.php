<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Auth;

use App\Models\Announcement;

class ListView extends Component
{
    public function mount() {


        $this->user = Auth::user();
    }
    public function choose($id) {
        $this->announcement = Announcement::find($id);

    }

    public function render()
    {
        return view('livewire.list-view');
    }

    public function delete($id) {
        $data = Announcement::find($id);
        $data->forceDelete();
        $this->mount();
    }

}
