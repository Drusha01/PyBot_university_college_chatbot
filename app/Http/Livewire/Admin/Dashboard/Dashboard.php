<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function mount(){
        $this->title = 'Dashboard';
    }
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
