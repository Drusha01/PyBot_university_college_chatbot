<?php

namespace App\Http\Livewire\Admin\AdminNotification;

use Livewire\Component;

class AdminNotification extends Component
{
    public function mount(){
        $this->title = 'Notification';
    }
    public function render()
    {
        return view('livewire.admin.admin-notification.admin-notification',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
