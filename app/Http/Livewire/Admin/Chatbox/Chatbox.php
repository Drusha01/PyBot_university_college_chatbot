<?php

namespace App\Http\Livewire\Admin\Chatbox;

use Livewire\Component;

class Chatbox extends Component
{
    public function mount(){
        $this->title = 'Chatbox';
    }
    public function render()
    {
        return view('livewire.admin.chatbox.chatbox',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
