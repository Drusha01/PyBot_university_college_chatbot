<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Python_executioner extends Controller
{
    //
    public $q_and_a_list;
    public function test(){
        $path = dirname(__FILE__,4);
        $pyscript = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\python\\python_test.py';
        $python = "C:\\Python_3.6\\python.exe";

        $output;

        $iteration = 1;

        return shell_exec("$python $pyscript $iteration $path");
    }

    public function execute_script(){
        $path = dirname(__FILE__,4);

        if(!is_dir($path.'/core/classes')){
            mkdir($path.'/core/classes');
        }
        if(!is_dir($path.'/core/words')){
            mkdir($path.'/core/words');
        }
        if(!is_dir($path.'/core/intents')){
            mkdir($path.'/core/intents');
        }
        if(!is_dir($path.'/core/models')){
            mkdir($path.'/core/models');
        }

        $pyscript = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\python\\training.py';
        $python = "C:\\Python_3.6\\python.exe";

        $output = 'niuce';
        $iteration = 1;
        $model_name = 'pybot_model';

        return shell_exec("$python $pyscript $iteration $path $model_name");
       
    }

    public function create_new_intent(Request $request){

        $version = $request->input('version');

        if(!$version){
            $version = 100 ;
        }
 
        $list_of_questions =DB::table('q_and_a as qa')
            ->get()
            ->toArray();

        // fetch from db to what is the current version
        
        
        $file_path  = dirname(__FILE__,4);
        $intent_file_path = '/core/intents/';
        $intent_file_name = 'intent_v'.$version.'.json';
        $intent_file = fopen($file_path.$intent_file_path.$intent_file_name,'w') or die("Unable to open file!");

        
        fwrite($intent_file, "{\"intents\": [\n");
            $len = count($list_of_questions);
            foreach ($list_of_questions as $key => $value) {
                if($key!=0){
                    fwrite($intent_file, "    {\"tag\": \"".($key+1)."\",\n");
                }else{
                    fwrite($intent_file, "    {\"tag\": \"".($key+1)."\",\n");
                }
                
                fwrite($intent_file, "      \"patterns\": [");
                $question_list = DB::table('q_and_a as qa')
                    ->join('questions as q', 'q.question_q_and_a_id', '=', 'qa.q_and_a_id')
                    ->where('qa.q_and_a_id','=',($key+1))
                    ->get()
                    ->toArray();
                $question_length = count($question_list);
                foreach ($question_list as $question_key => $question_value) {
                    fwrite($intent_file, "\"".$question_value->question_details."\"");
                    if($question_key != $question_length-1){
                        fwrite($intent_file, ",");
                    }
                }
                fwrite($intent_file, "],\n");

                fwrite($intent_file, "      \"responses\": [");
                $answers_list = DB::table('q_and_a as qa')
                    ->join('answers as a', 'a.answer_q_and_a_id', '=', 'qa.q_and_a_id')
                    ->where('qa.q_and_a_id','=',($key+1))
                    ->get()
                    ->toArray();
                $answer_length = count($answers_list);
                foreach ($answers_list as $answer_key => $answer_value) {
                    fwrite($intent_file, "\"".$answer_value->answer_details."\"");
                    if($answer_key != $answer_length-1){
                        fwrite($intent_file, ",");
                    }
                }
                fwrite($intent_file, "],\n");
                fwrite($intent_file, "      \"context_set\": \"\"");
                if($key == $len-1){
                    fwrite($intent_file, "\n    }");
                }else{
                    fwrite($intent_file, "\n    },\n");
                }
                // break;
            }
        fwrite($intent_file, "  \n  ]\n}");
        fclose($intent_file);
        return ($intent_file_name);
    }

    public function intents_list(){
        $file_path  = dirname(__FILE__,4);
        $intent_file_path = '/core/intents/';
        $dir = $file_path.$intent_file_path;
        $intents_list = scandir($dir);
        $intent_length = count($intents_list);
        for ($i=2; $i < $intent_length; $i++) { 
            echo $intents_list[$i].'<br>';
        }
      
    }
}
