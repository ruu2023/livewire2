<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CounterSample extends Component
{
    public $count = 0;

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

    public function render()
    {
        $param = [
            'count' => 2
        ];
        DB::insert('insert into counters(count) values(:count)', $param);

        $data = DB::table('counters')->first()->count;
        return view('livewire.counter-sample', compact('data'));
    }
}
