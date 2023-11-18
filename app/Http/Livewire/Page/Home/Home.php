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
        if(!isset($this->user_details['user_id'])){
            header("Location: /login");
            die();
        }else{
            $user_status = DB::table('users as u')
            ->select('u.user_status_id','us.user_status_details')
            ->join('user_status as us', 'u.user_status_id', '=', 'us.user_status_id')
            ->where('user_id','=', $this->user_details['user_id'])
            ->first();
        }

        if(isset($user_status->user_status_details) && $user_status->user_status_details == 'deleted' ){
            header("Location: /deleted");
            die();
        }

        if(isset($user_status->user_status_details) && $user_status->user_status_details == 'inactive' ){
            header("Location: /inactive");
            die();
        }
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
