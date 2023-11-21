<?php

namespace App\Http\Livewire\Page\Home;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Home extends Component
{
    public function booted(Request $request){
        $this->user_details = $request->session()->all();
        
    }
    public function hydrate(){
        
    }
    public function update_data(){
        $this->carousel_data = DB::table('carousel as c')
        ->select('*')
        ->orderBy('carousel_order')
        ->get()
        ->toArray();
    }
    public function mount(Request $request){
        $this->user_details = $request->session()->all();
        $this->title = 'Homepage';

        self::update_data();
    }
    public function render()
    {
        return view('livewire.page.home.home',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
