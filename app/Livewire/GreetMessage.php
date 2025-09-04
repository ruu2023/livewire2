<?php

namespace App\Livewire;

use Livewire\Component;

class GreetMessage extends Component
{
    public $message;
    public $pushCnt;

    public function __construct()
    {
        $this->message = "Hello World";
        $this->pushCnt = 0;
    }

    public function greet()
    {
        $this->pushCnt++;
        $this->message = "Hello, Livewire (" . $this->pushCnt . ")";
    }

    public function render()
    {
        return view('livewire.greet-message');
    }
}
