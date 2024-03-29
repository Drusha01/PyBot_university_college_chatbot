<?php

namespace App\Http\Livewire\Components\Sidebar;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AdminSidebar extends Component
{
    public $current_roles;
    public function mount(Request $request){
        $this->user_details = $request->session()->all();
        $this->current_roles = DB::table('access_roles as ar')
            ->select(
                'access_role_id',
                'access_role_module_id',
                'module_nav_name',
                'module_nav_route',
                'module_nav_icon',
                'access_role_create',
                'access_role_read',
                'access_role_update',
                'access_role_delete',
                )
            ->where('access_role_user_id','=',$this->user_details['user_id'])
            ->join('modules as m','m.module_id','ar.access_role_module_id' )
            ->orderBy('module_number','asc')
            ->get()
            ->toArray();
        // dd($this->current_roles);
    }
    public function render()
    {
        return view('livewire.components.sidebar.admin-sidebar');
    }
}
