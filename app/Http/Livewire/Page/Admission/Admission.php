<?php

namespace App\Http\Livewire\Page\Admission;

use Livewire\Component;

class Admission extends Component
{
    public function mount(){
        $this->title = 'Admission';
    }
    public function render()
    {
        return view('livewire.page.admission.admission',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
