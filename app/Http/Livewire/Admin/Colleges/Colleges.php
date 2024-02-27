<?php

namespace App\Http\Livewire\Admin\Colleges;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Colleges extends Component
{
    use WithFileUploads;
    public $ccs_data;

    public $ccs_q_and_a_data;
    public $ccs_q_and_a_filter;
    public $active;

    public $q_and_a = [
        'q_and_a_id' => NULL,
        'questions'=>NULL,
        'answers'=>NULL,
        'q_and_a_tag'=>NULL,
        'q_and_a_type_id'=>NULL,
        'q_and_a_target_type_id'=>NULL
    ];
    public $question = [
        "question_id" => NULL,
        "question_q_and_a_id"=> NULL,
        "question_details"=> NULL,
    ];

    public $target_type_id;
    public $target_types = [];
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
            ->where('m.module_nav_name','=','Colleges')
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

   
    public function update_data(){
        $this->ccs_data = DB::table('q_and_a as qa')
        ->select('q_and_a_id','q_and_a_tag','target_type_details','target_type_id')
        ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
        ->join('target_types as tt', 'tt.target_type_id', '=', 'qa.q_and_a_target_type_id')
        ->where('qt.q_and_a_type_details','=','CCS')
        ->orderBy('q_and_a_id')
        ->get()
        ->toArray();
        $this->ccs_q_and_a_data = [];
        foreach ($this->ccs_data as $key => $value) {
            $questions = DB::table('questions as q')
                ->where('question_q_and_a_id','=',$value->q_and_a_id)
                ->get()
                ->toArray();

            $questions_data =[];
            foreach ($questions as $key => $q_value) {
                array_push($questions_data,$q_value->question_details);
            }

            $answers = DB::table('answers as a')
                ->where('answer_q_and_a_id','=',$value->q_and_a_id)
                ->get()
                ->toArray();

            $answers_data =[];
            foreach ($answers as $key => $a_value) {
                array_push($answers_data,['answers'=>$a_value->answer_details,'answer_type'=>$a_value->answer_type]);
            }
            
            array_push($this->ccs_q_and_a_data,[
                'questions'=>$questions_data,
                'tags'=>$value->q_and_a_tag,
                'target_type_details'=>$value->target_type_details,
                'target_type_id'=>$value->target_type_id,
                'answers'=>$answers_data,
                'q_and_a_id' =>$value->q_and_a_id 
            ]);

            
        }


        $this->csc_data = DB::table('q_and_a as qa')
            ->select('q_and_a_id','q_and_a_tag','target_type_details','target_type_id')
            ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
            ->join('target_types as tt', 'tt.target_type_id', '=', 'qa.q_and_a_target_type_id')
            ->where('qt.q_and_a_type_details','=','CSC')
            ->orderBy('q_and_a_id')
            ->get()
            ->toArray();
        $this->csc_q_and_a_data = [];
        foreach ($this->csc_data as $key => $value) {
            $questions = DB::table('questions as q')
                ->where('question_q_and_a_id','=',$value->q_and_a_id)
                ->get()
                ->toArray();

            $questions_data =[];
            foreach ($questions as $key => $q_value) {
                array_push($questions_data,$q_value->question_details);
            }

            $answers = DB::table('answers as a')
                ->where('answer_q_and_a_id','=',$value->q_and_a_id)
                ->get()
                ->toArray();

            $answers_data =[];
            foreach ($answers as $key => $a_value) {
                array_push($answers_data,['answers'=>$a_value->answer_details,'answer_type'=>$a_value->answer_type]);
            }
            
            array_push($this->csc_q_and_a_data,[
                'questions'=>$questions_data,
                'tags'=>$value->q_and_a_tag,
                'target_type_details'=>$value->target_type_details,
                'target_type_id'=>$value->target_type_id,
                'answers'=>$answers_data,
                'q_and_a_id' =>$value->q_and_a_id 
            ]);
        }

        $this->target_types = DB::table('target_types')
            ->get()
            ->toArray();
    }

    public function mount(){
        $this->title = 'Colleges';
        $this->active = 'college_management';

        $this->ccs_q_and_a_filter = [
            '#' => true,
            'Questions' => true,
            'Tags'=> true,
            'Target'=> true,
            'Responses'=> true,
            'Actions'	=> true
        ];
        $this->csc_q_and_a_filter = [
            '#' => true,
            'Questions' => true,
            'Tags'=> true,
            'Target'=> true,
            'Responses'=> true,
            'Actions'	=> true
        ];
        self::update_data();
        // dd($this->ccs_q_and_a_data);
    }

    public function render(){
        return view('livewire.admin.colleges.colleges',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
    public function active_page($active){
        $this->active = $active;
        self::update_data();
    }
    public function edit_q_and_a($q_and_a_id){
        
        if($this->access_role['C']  ){
            $q_and_a = DB::table('q_and_a as qa')
                ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
                ->join('target_types as tt', 'tt.target_type_id', '=', 'qa.q_and_a_target_type_id')
                ->where('q_and_a_id','=',$q_and_a_id)
                ->first();
                $this->target_type_id = $q_and_a->target_type_id;
            $questions = DB::table('questions')
                ->where('question_q_and_a_id','=',$q_and_a_id)
                ->get()
                ->toArray();
            $answers = DB::table('answers')
            ->where('answer_q_and_a_id','=',$q_and_a_id)
            ->get()
            ->toArray();

            $questions_list = [];
            foreach ($questions as $key => $value) {
                array_push($questions_list,[
                    'question_details'=>$value->question_details,
                    'question_id'=>$value->question_id
                ]);
            }

            $answers_list = [];
            foreach ($answers as $key => $value) {
                if($value->answer_type == 1){
                    array_push($answers_list,[
                        'answer_details'=>null,
                        'answer_type'=>$value->answer_type,
                        'answer_id'=>$value->answer_id
                    ]);
                }else{
                    array_push($answers_list,[
                        'answer_details'=>$value->answer_details,
                        'answer_type'=>$value->answer_type,
                        'answer_id'=>$value->answer_id
                    ]);
                }
                
            }
           

            $this->q_and_a = [
                'q_and_a_id' => $q_and_a_id,
                'questions'=>$questions_list,
                'answers'=>$answers_list,
                'q_and_a_tag'=>NULL,
                'q_and_a_type_id' => $q_and_a->q_and_a_type_id,
                'q_and_a_type_details'=>$q_and_a->q_and_a_type_details,
                'target_type_id'=> $q_and_a->target_type_id,
                'target_type_details'=>$q_and_a->target_type_details
            ];
            // dd( $this->q_and_a);
            self::update_data();
            $this->dispatchBrowserEvent('openModal','editModal');
        }
    }
    public function add_q_and_a($q_and_a_type_id){
        $questions_list = [];
        array_push($questions_list,[
            'question_details'=>NULL,
            'question_id'=>NULL
        ]);
    

        $answers_list = [];
    
        $target_type_id = NULL;
        if($this->target_types){
            foreach ($this->target_types as $key => $value) {
                $target_type_id = $value->target_type_id;
                break;
            }
        }

        $q_and_a_type_id = DB::table('q_and_a_types')
            ->where('q_and_a_type_details','=',$q_and_a_type_id)
            ->first()->q_and_a_type_id;

        $this->q_and_a = [
            'q_and_a_id' => 0,
            'questions'=>$questions_list,
            'answers'=>$answers_list,
            'q_and_a_tag'=>NULL,
            'q_and_a_type_id' => $q_and_a_type_id,
            'q_and_a_type_details'=>NULL,
            'target_type_id'=> $target_type_id,
            'target_type_details'=>NULL
        ];


        $this->dispatchBrowserEvent('openModal','AddModal');
    }

    
    public function save_image($photo,$folder_name){
        if($photo && file_exists(storage_path().'/app/livewire-tmp/'.$photo->getfilename())){
            $file_extension =$photo->getClientOriginalExtension();
            $tmp_name = 'livewire-tmp/'.$photo->getfilename();
            $size = Storage::size($tmp_name);
            $mime = Storage::mimeType($tmp_name);
            $max_image_size = 20 * 1024*1024; // 5 mb
            $file_extensions = array('image/jpeg','image/png','image/jpg','application/pdf');
            
            if($size<= $max_image_size){
                $valid_extension = false;
                foreach ($file_extensions as $value) {
                    if($value == $mime){
                        $valid_extension = true;
                        break;
                    }
                }
                if($valid_extension){
                    $storage_file_path = storage_path().'/app/public/'.$folder_name.'/';
                    // move
                    $new_file_name = md5($tmp_name).'.'.$file_extension;
                    while(DB::table('answers')
                    ->where([$folder_name=> $new_file_name,'answer_type' =>1])
                    ->first()){
                        $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                    }
                   
                    if(Storage::copy($tmp_name, 'public/'.$folder_name.'/'.$new_file_name)){
                        return $new_file_name;
                    }    
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Invalid image type!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }
            }else{
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Image is too large!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1500',
                    'link'              									=> '#'
                ]);
                return 0;
            }     
        }
    }
    public function save_add_q_and_a(){
        if(isset($this->q_and_a['q_and_a_id'])){
            $questions = $this->q_and_a['questions'];
            $question_valid = false;
            foreach ($questions as $key => $value) {
                if(strlen($value['question_details'])>0){
                    $question_valid = true;
                    break;
                }
            }

            $answer_valid = false;
            $answers = $this->q_and_a['answers'];
            foreach ($answers as $key => $value) {
                if(strlen($value['answer_details'])>0){
                    $answer_valid = true;
                    break;
                }
            }
            if($question_valid && $answer_valid ){
               DB::table('q_and_a')
                ->insert([
                    'q_and_a_type_id'=>$this->q_and_a['q_and_a_type_id'],
                    'q_and_a_tag'=>NULL,
                    'q_and_a_target_type_id'=>$this->q_and_a['target_type_id']
                ]);
                $q_and_a = DB::table('q_and_a as qa')
                    ->orderBy('q_and_a_id','desc')
                    ->first();

                foreach ($questions as $key => $value) {
                    if(strlen($value['question_details'])>0){
                        DB::table('questions')
                        ->insert([
                            'question_details'=> $value['question_details'],
                            'question_q_and_a_id'=>$q_and_a->q_and_a_id
                    ]);
                    }
                }
                foreach ($answers as $key => $value) {
                    if($value['answer_type'] == 2){
                        DB::table('answers')
                        ->insert([
                            'answer_details'=> $value['answer_details'],
                            'answer_type'=> $value['answer_type'],
                            'answer_q_and_a_id'=>$q_and_a->q_and_a_id
                        ]);
                    }else{
                        $file_name = self::save_image($value['answer_details'],'answer_details');
                        DB::table('answers')
                        ->insert([
                            'answer_details'=> $file_name ,
                            'answer_type'=> $value['answer_type'],
                            'answer_q_and_a_id'=>$q_and_a->q_and_a_id
                        ]);
                    }
                    if(strlen($value['answer_details'])>0){
                        
                    }
                }
                self::update_data();
           
                $this->dispatchBrowserEvent('openModal','AddModal');
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);

            }else{
                if(!$answer_valid){
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Please provide a valid answer!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1000',
                        'link'              									=> '#'
                    ]);
                }
                if(!$question_valid){
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Please provide a valid question!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1000',
                        'link'              									=> '#'
                    ]);
                }
                
            }
        }
        
    }
    public function save_edit_q_and_a($q_and_a_id){
        if(intval($q_and_a_id)>0 && $q_and_a = DB::table('q_and_a as qa')
            ->where('q_and_a_id','=',$q_and_a_id)
            ->first()){
            $valid = true;
            $questions = $this->q_and_a['questions'];
            DB::table('questions')
                ->where('question_q_and_a_id','=',$q_and_a_id)
                ->delete();
            foreach ($questions as $key => $value) {
                if(strlen($value['question_details'])>0){
                    DB::table('questions')
                        ->insert([
                            'question_details'=> $value['question_details'],
                            'question_q_and_a_id'=>$q_and_a_id
                    ]);
                }
            }
            $answers = $this->q_and_a['answers'];
            DB::table('answers')
                ->where('answer_q_and_a_id','=',$q_and_a_id)
                ->delete();
                foreach ($answers as $key => $value) {
                    if($value['answer_details']){
                        if($value['answer_type'] == 2){
                            DB::table('answers')
                            ->insert([
                                'answer_details'=> $value['answer_details'],
                                'answer_type'=> $value['answer_type'],
                                'answer_q_and_a_id'=>$q_and_a->q_and_a_id
                            ]);
                        }else{
                            $file_name = self::save_image($value['answer_details'],'answer_details');
                            DB::table('answers')
                            ->insert([
                                'answer_details'=> $file_name ,
                                'answer_type'=> $value['answer_type'],
                                'answer_q_and_a_id'=>$q_and_a->q_and_a_id
                            ]);
                        }
                    }   
                }
            DB::table('q_and_a')
                ->where('q_and_a_id','=',$q_and_a_id)
                ->update(['q_and_a_target_type_id'=>$this->q_and_a['target_type_id']]);

            self::update_data();
           
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
    public function add_question(){
        array_push($this->q_and_a['questions'],[
            'question_details'=>NULL,
            'question_id'=>NULL
        ]);
    }
    public function add_answer($answer_type){
        array_push($this->q_and_a['answers'],[
            'answer_details'=>NULL,
            'answer_type'=>$answer_type,
            'answer_id'=>NULL
        ]);
    }
    public function remove_question($key){
        $questions = $this->q_and_a['questions'];
        $questions_list = [];
       foreach ($questions as $q_key => $value) {
            if($key != $q_key){
                array_push($questions_list,$value);
            }
       }
       $this->q_and_a['questions'] = $questions_list;
    }
    public function remove_answer($key){
        $answers = $this->q_and_a['answers'];
        $answers_list = [];
       foreach ($answers as $q_key => $value) {
            if($key != $q_key){
                array_push($answers_list,$value);
            }
       }
       $this->q_and_a['answers'] = $answers_list;
    }
    public function delete_q_and_a($q_and_a_id){
        if($this->access_role['D']  ){

            $q_and_a = DB::table('q_and_a as qa')
                ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
                ->join('target_types as tt', 'tt.target_type_id', '=', 'qa.q_and_a_target_type_id')
                ->where('q_and_a_id','=',$q_and_a_id)
                ->first();
                $this->target_type_id = $q_and_a->target_type_id;

            $questions = DB::table('questions')
                ->where('question_q_and_a_id','=',$q_and_a_id)
                ->get()
                ->toArray();
            $answers = DB::table('answers')
            ->where('answer_q_and_a_id','=',$q_and_a_id)
            ->get()
            ->toArray();

            $questions_list = [];
            foreach ($questions as $key => $value) {
                array_push($questions_list,[
                    'question_details'=>$value->question_details,
                    'question_id'=>$value->question_id
                ]);
            }

            $answers_list = [];
            foreach ($answers as $key => $value) {
                array_push($answers_list,[
                    'answer_details'=>$value->answer_details,
                    'answer_type'=>$value->answer_type,
                    'answer_id'=>$value->answer_id
                ]);
            }
           
            $this->q_and_a = [
                'q_and_a_id' => $q_and_a_id,
                'questions'=>$questions_list,
                'answers'=>$answers_list,
                'q_and_a_tag'=>NULL,
                'q_and_a_type_id' => $q_and_a->q_and_a_type_id,
                'q_and_a_type_details'=>$q_and_a->q_and_a_type_details,
                'target_type_id'=> $q_and_a->target_type_id,
                'target_type_details'=>$q_and_a->target_type_details
            ];
            $this->dispatchBrowserEvent('openModal','DeleteModal');
        }
    }
    public function save_delete_q_and_a($q_and_a_id){
        DB::table('questions')
            ->where('question_q_and_a_id','=',$q_and_a_id)
            ->delete();

            DB::table('answers')
            ->where('answer_q_and_a_id','=',$q_and_a_id)
            ->delete();
        
        DB::table('q_and_a as qa')
            ->where('q_and_a_id','=',$q_and_a_id)
            ->delete();

        self::update_data();
        
        $this->dispatchBrowserEvent('openModal','DeleteModal');
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
