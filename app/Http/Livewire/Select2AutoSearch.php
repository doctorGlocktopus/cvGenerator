<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Select2AutoSearch extends Component
{
    public $viralSongs = '';

    public $json;
 
    public $songs = [
        'Say So',
        'The Box',
        'Laxed',
        'Savage',
        'Dance Monkey',
        'Viral',
        'Hotline Billing',
    ];

    public function mount() {

    }

    public function render()
    {
        return view('livewire.select2-auto-search')->extends('layouts.app');
    }
}
