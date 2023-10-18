<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;

class Setting extends Component
{
    public function mount(){
        $this->title = 'Setting';
    }
    public function render()
    {
        return view('livewire.admin.setting.setting',[
            ])
            ->layout('layouts.page',[
                'title'=>$this->title]);
    }
}
