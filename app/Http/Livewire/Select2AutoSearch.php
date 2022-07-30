<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

use App\Models\Postcode;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Http\Livewire\Builder;


class Select2AutoSearch extends Component
{

    public $error = "";

    public $stepper = 0;

    public $json;

    public $postcode;

    public $city;

    public $data;

    public $input;

    public $search = [];

    public $step;


    public function Utf8_ansi($valor ='') {
    
        if(strlen($this->input) >= 2) {
            $this->step = 1;

            $utf8_ansi2 = array(
            "\u00c0" =>"À",
            "\u00c1" =>"Á",
            "\u00c2" =>"Â",
            "\u00c3" =>"Ã",
            "\u00c4" =>"Ä",
            "\u00c5" =>"Å",
            "\u00c6" =>"Æ",
            "\u00c7" =>"Ç",
            "\u00c8" =>"È",
            "\u00c9" =>"É",
            "\u00ca" =>"Ê",
            "\u00cb" =>"Ë",
            "\u00cc" =>"Ì",
            "\u00cd" =>"Í",
            "\u00ce" =>"Î",
            "\u00cf" =>"Ï",
            "\u00d1" =>"Ñ",
            "\u00d2" =>"Ò",
            "\u00d3" =>"Ó",
            "\u00d4" =>"Ô",
            "\u00d5" =>"Õ",
            "\u00d6" =>"Ö",
            "\u00d8" =>"Ø",
            "\u00d9" =>"Ù",
            "\u00da" =>"Ú",
            "\u00db" =>"Û",
            "\u00dc" =>"Ü",
            "\u00dd" =>"Ý",
            "\u00df" =>"ß",
            "\u00e0" =>"à",
            "\u00e1" =>"á",
            "\u00e2" =>"â",
            "\u00e3" =>"ã",
            "\u00e4" =>"ä",
            "\u00e5" =>"å",
            "\u00e6" =>"æ",
            "\u00e7" =>"ç",
            "\u00e8" =>"è",
            "\u00e9" =>"é",
            "\u00ea" =>"ê",
            "\u00eb" =>"ë",
            "\u00ec" =>"ì",
            "\u00ed" =>"í",
            "\u00ee" =>"î",
            "\u00ef" =>"ï",
            "\u00f0" =>"ð",
            "\u00f1" =>"ñ",
            "\u00f2" =>"ò",
            "\u00f3" =>"ó",
            "\u00f4" =>"ô",
            "\u00f5" =>"õ",
            "\u00f6" =>"ö",
            "\u00f8" =>"ø",
            "\u00f9" =>"ù",
            "\u00fa" =>"ú",
            "\u00fb" =>"û",
            "\u00fc" =>"ü",
            "\u00fd" =>"ý",
            "\u00ff" =>"ÿ");
    
            $x = 0;
            if(count($valor) >= 1) {
                foreach($valor as $i) {
                    $data[$x] = new Postcode();
                    $data[$x]->postcode = $i[0];
                    $data[$x]->city = strtr($i[1], $utf8_ansi2);
                    array_push($this->search, $data[$x]);
                    $x++;
                    if($x==10)
                        break;
                }
    
            $this->postcode = $data[0]["postcode"];
            $this->city = $data[0]["city"];
            } else {
                $this->postcode = $data["postcode"];
                $this->city = $data["city"];
            }
        }
    }

    public function error($input) {
        $this->error = $input;
    }

    public function getData($data) {
        $this->postcode = $data["postcode"];
        $this->city = $data["city"];
        $this->step = 2;
        // $this->data = $data;
        $this->emit('search');
    }

    // public function back() {
    //     $this->emit('search');
    // }


    public function render()
    {
        if($this->step == 2){
        return <<<'blade'
        <div>
            <div class="flex">
                <div>
                    <label>Postleitzahl</label>
                    <input id="autoCode" type="number" class="form-control" wire:model="postcode">    
                </div>
                <div>
                    <label>Stadt</label>
                    <input id="autoCity" type="text" class="form-control" wire:model="city">
                </div>  
            </div>
            <div onclick="fillValue()"class="pTop1pc">
                <button type="submit" class="btn btn-primary">Meine Adresse speichern</button>
            </div>
        </div>
        blade;
        } else
        return view('livewire.select2-auto-search')->extends('layouts.app');
        
    }
}
