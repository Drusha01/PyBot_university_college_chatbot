<?php

namespace App\Http\Livewire\Admin\Model;

use Livewire\Component;

class Model extends Component
{
    public function mount(){
        $this->title = 'Model';
    }
    public function render()
    {
        return view('livewire.admin.model.model',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
