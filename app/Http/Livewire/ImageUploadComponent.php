<?php


namespace App\Http\Livewire;


use App\Models\Image;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Auth;


class ImageUploadComponent extends Component
{
    use WithFileUploads;


    public $image;


    public function mount()
    {
        
    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'image' => 'required',
        ]);
    }
    
    public function uploadImage()
    {
        $this->validate([
            'image' => 'required',
        ]);


        $image = new Image();

        
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('image_uploads', $imageName);
        $image->user_id = Auth::User()->id;
        $image->image = $imageName;


        $image->save();


        session()->flash('message', 'Image has been uploaded successfully');


        $this->image = '';


    }
    


    public function render()
    {
        //Get Uploaded Images

        if(Auth::User())
            $images = Image::where("user_id", Auth::User()->id)->orderBy('id','DESC')->get();
        else
            $images = [];

        return view('livewire.image-upload-component',['images'=>$images])->layout('livewire.layouts.base');
    }
}