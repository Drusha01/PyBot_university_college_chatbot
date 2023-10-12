<?php

namespace App\Http\Livewire\Authentication;

use Livewire\Component;

class AccountDeleted extends Component
{
    public function mount(){
        $this->title = 'deleted';
    }
    public function render()
    {
        return view('livewire.authentication.account-deleted',[
            ])
            ->layout('layouts.account-disabled',[
                'title'=>$this->title]);
    }
}
