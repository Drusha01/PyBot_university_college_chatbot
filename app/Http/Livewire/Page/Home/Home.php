<?php

namespace App\Http\Livewire\Page\Home;

use Livewire\Component;

class Home extends Component
{
    public function mount(){
        $this->title = 'Homepage';
    }
    public function render()
    {
        return view('livewire.page.home.home',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
