<?php

namespace App\Http\Livewire\Admin\Colleges;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Colleges extends Component
{
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

    public function hydrate(){
        self::update_data();
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
                array_push($answers_data,$a_value->answer_details);
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
                array_push($answers_data,$a_value->answer_details);
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
    }
    public function edit_q_and_a($q_and_a_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];
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
                array_push($answers_list,[
                    'answer_details'=>$value->answer_details,
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
    
        array_push($answers_list,[
            'answer_details'=>NULL,
            'answer_id'=>NULL
        ]);

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
                    if(strlen($value['answer_details'])>0){
                        DB::table('answers')
                        ->insert([
                            'answer_details'=> $value['answer_details'],
                            'answer_q_and_a_id'=>$q_and_a->q_and_a_id
                    ]);
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
                if(strlen($value['answer_details'])>0){
                    DB::table('answers')
                        ->insert([
                            'answer_details'=> $value['answer_details'],
                            'answer_q_and_a_id'=>$q_and_a_id
                    ]);
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
    public function add_answer(){
        array_push($this->q_and_a['answers'],[
            'answer_details'=>NULL,
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
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];
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
