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
