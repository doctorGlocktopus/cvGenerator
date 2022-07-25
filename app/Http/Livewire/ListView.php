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

    public function jumper() {
        $this->jump = 0;
    }

    public function close($i) {
        $this->close = $i;
    }

    public function render()
    {
        return view('livewire.list-view');
    }

    public function delete($id) {
        if($this->jump == 0)
            $this->jump = 1;
        else {
            $data = Announcement::find($id);
            $data->forceDelete();
            $this->jump = 0;
            $this->mount();
        }

    }

}
