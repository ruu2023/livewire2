<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CounterSample extends Component
{
    public $count = 0;
    public $latestId;
    public $message;

    public function __construct()
    {
        $this->latestId = DB::table('counters')->max('id');
    }

    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function decade()
    {
        $this->count= $this->count * 10;
    }
    public function zero()
    {
        $this->count= 0;
    }

    public function saveNum()
    {
        $this->latestId = DB::table('counters')->insertGetId(['count' => $this->count]);
    }

    public function getMessage($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        $param = [
            'count' => 2
        ];

        $data = DB::table('counters')->latest('id')->first()->count ?? 0;
        return view('livewire.counter-sample', compact('data'));
    }
}
