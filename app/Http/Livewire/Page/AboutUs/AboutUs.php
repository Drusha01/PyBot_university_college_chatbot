<?php

namespace App\Http\Livewire\Page\AboutUs;

use Livewire\Component;

class AboutUs extends Component
{
    public function mount(){
        $this->title = 'AboutUs';
    }
    public function render()
    {
        return view('livewire.page.AboutUs.AboutUs',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
