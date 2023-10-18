<?php

namespace App\Http\Livewire\Admin\Csc;

use Livewire\Component;

class Csc extends Component
{
    public function mount(){
        $this->title = 'csc';
    }
    public function render()
    {
        return view('livewire.admin.csc.csc',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
