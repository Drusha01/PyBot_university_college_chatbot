<?php

namespace App\Http\Livewire\Admin\Department;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Department extends Component
{
    public $it_data;
    public $it_q_and_a_data;
    public $cs_data;
    public $cs_q_and_a_data;
    public $act_data;
    public $act_q_and_a_data;

    public $questions_array = [];
    public $answers_array =[];
    public $question_tag;

    public $qa_for =0;
    public $qa_type;

    public function hydrate(){
        $this->qa_type = DB::table('q_and_a_types as qt')
            ->orWhere([
                'qt.q_and_a_type_details'=>'CS'
                ])
            ->orWhere([
                'qt.q_and_a_type_details'=>'IT'
                ])
            ->orWhere([
                'qt.q_and_a_type_details'=>'ACT'
                ])
            ->get()
            ->toArray();
    }

    public function mount(){

        $this->title = 'Department';

        $this->it_q_and_a_data_filter = [
            '#' => true,
            'Questions' => true,
            'Tags'=> true,
            'Responses'=> true,
            'Actions'	=> true
        ];
        $this->cs_q_and_a_data_filter = [
            '#' => true,
            'Questions' => true,
            'Tags'=> true,
            'Responses'=> true,
            'Actions'	=> true
        ];
        $this->act_q_and_a_data_filter = [
            '#' => true,
            'Questions' => true,
            'Tags'=> true,
            'Responses'=> true,
            'Actions'	=> true
        ];

        $this->it_data = DB::table('q_and_a as qa')
        ->select('q_and_a_id','q_and_a_tag')
        ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
        ->where('qt.q_and_a_type_details','=','IT')
        ->get()
        ->toArray();

        $this->it_q_and_a_data = [];
        foreach ($this->it_data as $key => $value) {
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

            array_push($this->it_q_and_a_data,
            ['questions'=>$questions_data,
            'answers'=>$answers_data]);
        }

        $this->cs_data = DB::table('q_and_a as qa')
        ->select('q_and_a_id','q_and_a_tag')
        ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
        ->where('qt.q_and_a_type_details','=','CS')
        ->get()
        ->toArray();
        $this->cs_q_and_a_data = [];
        foreach ($this->cs_data as $key => $value) {
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
            array_push($this->cs_q_and_a_data,
            ['questions'=>$questions_data,
            'answers'=>$answers_data]);
        }

        $this->act_data = DB::table('q_and_a as qa')
        ->select('q_and_a_id','q_and_a_tag')
        ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
        ->where('qt.q_and_a_type_details','=','ACT')
        ->get()
        ->toArray();
        $this->act_q_and_a_data = [];
        foreach ($this->act_data as $key => $value) {
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
            array_push($this->act_q_and_a_data,
            ['questions'=>$questions_data,
            'answers'=>$answers_data]);
        }

        $this->qa_type = DB::table('q_and_a_types as qt')
            ->orWhere([
                'qt.q_and_a_type_details'=>'CS'
                ])
            ->orWhere([
                'qt.q_and_a_type_details'=>'IT'
                ])
            ->orWhere([
                'qt.q_and_a_type_details'=>'ACT'
                ])
            ->get()
            ->toArray();


            $questions_array = [];
            $answers_array = [];
    }
    public function render()
    {
        return view('livewire.admin.department.department',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }


}
