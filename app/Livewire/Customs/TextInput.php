<?php

namespace App\Livewire\Customs;

use Livewire\Component;

class TextInput extends Component
{

    public $value;
    public $label;
    public $type;
    public $placeholder;
    public $custom_id;


    public function render()
    {
        return view('livewire.customs.text-input');
    }
}
