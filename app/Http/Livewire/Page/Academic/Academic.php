<?php

namespace App\Http\Livewire\Page\Academic;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Academic extends Component
{
    public function booted(Request $request){
    }
    public function hydrate(){
        
    }
    public function update_data(){
        $this->academic_data = DB::table('academics as a')
            ->select('*')
            ->orderBy('academic_order')
            ->get()
            ->toArray();
    }
    public function mount(Request $request){
        $this->user_details = $request->session()->all();
        $this->title = 'academic';

        self::update_data();
    }
    public function render()
    {
        return view('livewire.page.academic.academic',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
