<?php

namespace App\Http\Livewire\Admin\Colleges;

use Livewire\Component;

class Colleges extends Component
{
    public function mount(){
        $this->title = 'Colleges';
    }
    public function render()
    {
        return view('livewire.admin.colleges.colleges',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
