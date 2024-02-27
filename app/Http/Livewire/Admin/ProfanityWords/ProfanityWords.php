<?php

namespace App\Http\Livewire\Admin\ProfanityWords;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class ProfanityWords extends Component
{
    public $profanity_words = [
        'id'=> NULL,
        'words'=> NULL,
    ];
    public $profanity_words_filter = [
        '#' => true,
        'Sentence' => true,
        'Actions'	=> true
    ];
    public $user_details;
    public $access_role;
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
        $module_roles = DB::table('access_roles as ar')
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
            ->where('module_nav_name','=','Profanity Word Management')
            ->first();
            $this->access_role = [
                'C' => $module_roles->access_role_create,
                'R' => $module_roles->access_role_read,
                'U' => $module_roles->access_role_update,
                'D' => $module_roles->access_role_delete
            ];
        if(!( $this->access_role['C'] || $this->access_role['R'] || $this->access_role['U'] || $this->access_role['D'] ) ){
            return redirect('/admin/dashboard');
        }
    }

    public function add_profanity_words(){
        $this->profanity_words = [
            'id'=> NULL,
            'words'=> NULL,
        ];
        $this->dispatchBrowserEvent('openModal','AddModal');
    }
    public function save_add_profanity_words(){
        if(!strlen($this->profanity_words['words'])>0){
            return;
        }
        if(DB::table('profanity_words')
            ->where('words','=',$this->profanity_words['words'])
            ->get()
            ->first()){
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'warning',
                'title'             									=> 'Words exist!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1500',
                'link'              									=> '#'
            ]);
        }else{
            if(DB::table('profanity_words')
                ->insert([
                    'id'=> NULL,
                    'words'=> $this->profanity_words['words']
                ])){
                $this->dispatchBrowserEvent('openModal','AddModal');
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
            }
            
        }
    }
    public function save_edit_profanity_words($id){
        if(!strlen($this->profanity_words['words'])>0){
            return;
        }
        if(DB::table('profanity_words')
            ->where('words','=',$this->profanity_words['words'])
            ->get()
            ->first()){
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'warning',
                'title'             									=> 'Words exist!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1500',
                'link'              									=> '#'
            ]);
        }else{
            if(DB::table('profanity_words')
                ->where('id','=',$id)
                ->update([
                    'words'=> $this->profanity_words['words']
                ])){
                $this->dispatchBrowserEvent('openModal','editModal');
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'successfully updated!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
            }
            
        }
    }
    public function edit_profanity_words($id){
        $profanity_words = DB::table('profanity_words')
        ->where('id','=',$id)
        ->get()
        ->first();
        if($profanity_words){
            $this->profanity_words = [
                'id'=> $id,
                'words'=>  $profanity_words->words,
            ];
            $this->dispatchBrowserEvent('openModal','editModal');
        }
        
    }
    public function delete_profanity_words($id){
        $profanity_words = DB::table('profanity_words')
        ->where('id','=',$id)
        ->get()
        ->first();
        if($profanity_words){
            $this->profanity_words = [
                'id'=> $id,
                'words'=>  $profanity_words->words,
            ];
            $this->dispatchBrowserEvent('openModal','DeleteModal');
        }
    }

    public function save_delete_profanity_words($id){
        if( $profanity_words = DB::table('profanity_words')
        ->where('id','=',$id)
        ->delete()){
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'success',
                'title'             									=> 'successfully deleted!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);
            $this->dispatchBrowserEvent('openModal','DeleteModal');
        }
    }
    public function render()
    {
        $profanity_words_data = DB::table('profanity_words')
            ->orderBy('number_order')
            ->get()
            ->toArray();
            // ->paginate(10);
        // dd($profanity_words_data );
        $this->title = 'Profanity Words';
        return view('livewire.admin.profanity-words.profanity-words',[
            'profanity_words_data' => $profanity_words_data
        ])
        ->layout('layouts.admin',[
            'title'=>$this->title]);
    }
}
