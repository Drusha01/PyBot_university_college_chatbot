<?php

namespace App\Http\Livewire\Page\AboutUs;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AboutUs extends Component
{
    public function booted(){

    }
    public function hydrate(){
        
    }
    public function update_data(){
        $this->about_us_data = DB::table('about_us')
        ->select('*')
        ->orderBy('about_us_order')
        ->get()
        ->toArray();
    }

    public function mount(Request $request){
        $this->user_details = $request->session()->all();
        $this->title = 'AboutUs';

        self::update_data();
    }
    public function render()
    {
        return view('livewire.page.AboutUs.AboutUs',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
