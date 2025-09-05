<?php

namespace App\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $message = "Hello World";

    public function setMessage()
    {
        $this->message = "initialize";
    }

    public function render()
    {
        return view('livewire.message');
    }
}
