<?php

namespace App\Http\Livewire\Page\Profile;

use Livewire\Component;

class Profile extends Component
{
    public function mount(){
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
