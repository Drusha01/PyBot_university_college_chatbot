<?php

namespace App\Http\Livewire\Admin\Department;

use Livewire\Component;

class Department extends Component
{
    public function mount(){
        $this->title = 'Department';
    }
    public function render()
    {
        return view('livewire.admin.department.department',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
