<?php

namespace App\Http\Livewire\Admin\Ccs;

use Livewire\Component;

class Ccs extends Component
{
    public function mount(){
        $this->title = 'ccs';
    }
    public function render()
    {
        return view('livewire.admin.ccs.ccs',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
