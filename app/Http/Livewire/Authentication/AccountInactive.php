<?php

namespace App\Http\Livewire\Authentication;

use Livewire\Component;

class AccountInactive extends Component
{
    public function render()
    {
        return view('livewire.authentication.account-inactive',[
            ])
            ->layout('layouts.account-disabled',[
                'title'=>$this->title]);
    }
}
