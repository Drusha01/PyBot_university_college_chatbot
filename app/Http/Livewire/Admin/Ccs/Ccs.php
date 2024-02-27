<?php

namespace App\Http\Livewire\Admin\Ccs;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Ccs extends Component
{
    public function booted(Request $request){
        $this->user_details = $request->session()->all();
        if(!isset($this->user_details['user_id'])){
            header("Location: login");
            die();
        }else{
            $user_status = DB::table('users as u')
            ->select('u.user_status_id','us.user_status_details')
            ->join('user_status as us', 'u.user_status_id', '=', 'us.user_status_id')
            ->where('user_id','=', $this->user_details['user_id'])
            ->first();
        }

        if(isset($user_status->user_status_details) && $user_status->user_status_details == 'deleted' ){
            header("Location: deleted");
            die();
        }

        if(isset($user_status->user_status_details) && $user_status->user_status_details == 'inactive' ){
            header("Location: inactive");
            die();
        }

        $this->module_roles = DB::table('access_roles as ar')
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
            ->join('modules as m','m.module_id','ar.access_role_module_id' )
            ->where('access_role_user_id','=',$this->user_details['user_id'])
            ->where('module_nav_name','=','Colleges')
            ->first();
        dd($this->module_roles);
    }
    public function mount(){
        $this->title = 'ccs';
    }
    public function render()
    {
        return view('livewire.admin.ccs.ccs',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
