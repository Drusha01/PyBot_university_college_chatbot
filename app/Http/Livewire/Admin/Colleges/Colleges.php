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


    public function mount(){
        $this->title = 'Colleges';

        $this->ccs_q_and_a_filter = [
            'Select all' => true,
            '#' => true,
            'Questions' => true,
            'Tags'=> true,
            'Responses'=> true,						
            'Actions'	=> true					
        ];
        $this->ccs_data = DB::table('q_and_a as qa')
        ->select('q_and_a_id','q_and_a_tag')
        ->join('q_and_a_types as qt', 'qt.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
        ->where('qt.q_and_a_type_details','=','CCS')
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
            array_push($this->ccs_q_and_a_data,
            ['questions'=>$questions_data,
            'tags'=>$value->q_and_a_tag,
            'answers'=>$answers_data]);
        }
        // dd($this->ccs_q_and_a_data);
    }

    public function render()
    {
        return view('livewire.admin.colleges.colleges',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }
}
