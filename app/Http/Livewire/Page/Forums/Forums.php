<?php

namespace App\Http\Livewire\Page\Forums;

use Livewire\Component;

class Forums extends Component
{
    public function mount(){
        $this->title = 'Forums';
    }
    public function render()
    {
        return view('livewire.page.forums.forums',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
