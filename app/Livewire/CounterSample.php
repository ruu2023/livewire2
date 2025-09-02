<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CounterSample extends Component
{
    public $count = 0;
    public $latestId;

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

    public function render()
    {
        $param = [
            'count' => 2
        ];
        // DB::insert('insert into counters(count) values(:count)', $param);
        // $items = DB::table('counters')->select( 'id', 'count')->get();
        // $itemLast = DB::table('counters')->latest('id')->first();
        // $ddItem = [];
        // foreach( $items as $item)
        // {
        //     $ddItem[] = $item->id . " : " . $item->count;
        // }
        // dd(DB::table('counters')->insertGetId(['count' => 3]), $ddItem, $items, $itemLast);

        $data = DB::table('counters')->latest('id')->first()->count;
        return view('livewire.counter-sample', compact('data'));
    }
}
