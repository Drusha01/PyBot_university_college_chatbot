<?php

namespace App\Http\Livewire\Page\Forums;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Forums extends Component
{
    public function booted(){

    }
    public function hydrate(){
        
    }
    public function update_data(){
        $this->faq_data = DB::table('faq as f')
            ->select('*')
            ->orderBy('faq_order')
            ->get()
            ->toArray();
    }
    public function mount(Request $request){
        $this->user_details = $request->session()->all();
        $this->title = 'Forums';
        self::update_data();
    }
    public function render()
    {
        return view('livewire.page.forums.forums',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
