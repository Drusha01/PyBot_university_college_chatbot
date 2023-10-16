<?php

namespace App\Http\Livewire\Page\Academic;

use Livewire\Component;

class Academic extends Component
{
    public function mount(){
        $this->title = 'academic';
    }
    public function render()
    {
        return view('livewire.page.academic.academic',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
