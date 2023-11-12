<?php

namespace App\Http\Livewire\Page\Profile;

use Livewire\Component;

class Profile extends Component
{
    public function booted(){

    }
    public function hydrate(){
        
    }
    public function update_data(){

    }
    public function mount(Request $request){
        $this->user_details = $request->session()->all();
        $this->title = 'Profile';
    }
    public function render()
    {
        return view('livewire.page.profile.profile',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
