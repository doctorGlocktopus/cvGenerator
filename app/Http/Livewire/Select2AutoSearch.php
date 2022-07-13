<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;



use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;




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

        // $client = new Client();
        // $guzzleResponse = $client->get('http://127.0.0.1:88/api/code/711', []);
        // dd($guzzleResponse);




        // $request = new Request('GET', 'http://localhost/postcode_api-master/public/api/code/711', ['body' => 'content']);
        // dd($request);
        // dd(Http::get('http://localhost/postcode_api-master/public/api/code/711'));
        // $this->response = Http::get('http://localhost/postcode_api-master/public/api/code/711');
        // $jsonData = $this->response->json();
         
        // dd($this->response);
    }

    public function render()
    {
        return view('livewire.select2-auto-search')->extends('layouts.app');
    }
}
