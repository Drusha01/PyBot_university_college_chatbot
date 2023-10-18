<?php

namespace App\Http\Livewire\Admin\AdminProfile;

use Livewire\Component;

class AdminProfile extends Component
{
    public function mount(){
        $this->title = 'Profile';
    }
    public function render()
    {
        return view('livewire.admin.admin-profile.admin-profile',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
