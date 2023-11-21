<?php

namespace App\Http\Livewire\Page\Admission;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Admission extends Component
{
    public function booted(Request $request){
        $this->user_details = $request->session()->all();
    }
    public function hydrate(){
        
    }
    public function update_data(){
        $this->admission_data = DB::table('admissions as a')
            ->select('*')
            ->orderBy('admission_order')
            ->get()
            ->toArray();
    }
    public function mount(Request $request){
        $this->user_details = $request->session()->all();
        $this->title = 'Admission';
        self::update_data();
    }
    public function render()
    {
        return view('livewire.page.admission.admission',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
