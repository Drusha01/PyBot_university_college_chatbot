<?php

namespace App\Http\Livewire\Admin\Usermanagement;

use Livewire\Component;

class Usermanagement extends Component
{
    public function mount(){
        $this->title = 'Usermaagement';
    }
    public function render()
    {
        return view('livewire.admin.usermanagement.usermanagement',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
