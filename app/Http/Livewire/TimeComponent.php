<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TimeComponent extends Component
{
    // public function single(Request $request)
    // {
    //         $request->session()->put('time1',$_GET['time1']);
    //         $request->session()->put('time2', $_GET['time2']);
    //         return redirect()->route('times2');
    // }

    // public function single2(Request $request) {
    //         $r["k1"] = $request->session()->get('time1');
    //         $r["k2"] = $request->session()->get('time2');

    //         return view('livewire.home-component',['time' => $r])->layout("layouts.base");
        
    // }

    public function render()
    {
        return view('livewire.time-component')->layout("layouts.base");
    }


}
