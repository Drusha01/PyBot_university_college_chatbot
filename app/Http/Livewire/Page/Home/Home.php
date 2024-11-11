<?php

namespace App\Http\Livewire\Page\Home;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Home extends Component
{
    public $academic_data;
    public $faculty_data;
    public function booted(Request $request){
    }
    public function hydrate(){
        
    }
    public function update_data(){
        $this->carousel_data = DB::table('carousel as c')
        ->select('*')
        ->orderBy('carousel_order')
        ->get()
        ->toArray();


        $this->about_us_data = DB::table('about_us')
            ->select('*')
            ->orderBy('about_us_order')
            ->get()
            ->toArray();

        $this->academic_data = DB::table('academics as a')
            ->select('*')
            ->orderBy('academic_order')
            ->get()
            ->toArray();

        $this->admission_data = DB::table('admissions as a')
            ->select('*')
            ->orderBy('admission_order')
            ->get()
            ->toArray();

        $this->faculty_data = DB::table('faculty')
            ->select('*')
            ->orderBy('faculty_order')
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
