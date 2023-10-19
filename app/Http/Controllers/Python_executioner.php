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

    public function train_model(Request $request){

        // check admin detals and restriction

        $intent_path_and_file = $request->input('data');
        $model_name = $request->input('model_name');
        $max_epoch = $request->input('max_epoch');
        $model_lr = $request->input('model_lr');

        if(!$max_epoch){
            $max_epoch = 250 ;
        }
        if(!$model_lr){
            $model_lr = 0.001 ;
        }

        $path = dirname(__FILE__,4).'\\core\\';
        if(!is_dir($path.'models')){
            mkdir($path.'models');
        }

        $pyscript = $path.'python\\training.py';
        $python = "C:\\Python_3.6\\python.exe";


        return shell_exec("$python $pyscript $path $model_name $intent_path_and_file $max_epoch $model_lr");
    }

    public function create_new_intent(Request $request){
        // check admin detals and restriction
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
        // check admin detals and restriction

        $file_path  = dirname(__FILE__,4);
        $intent_file_path = '/core/intents/';
        $dir = $file_path.$intent_file_path;
        $intents_list = scandir($dir);
        $intent_length = count($intents_list);
        for ($i=2; $i < $intent_length; $i++) { 
            echo $dir.$intents_list[$i].'<br>';
        }
    }

    public function pychat(Request $request){

        // check admin detals and restriction
        $question = $request->input('chat');

        // write to question folder
        if(strlen($question)>0){
            $file_path  = dirname(__FILE__,4);
            $question_file_path = '/core/deployment/questions/';
            $answer_file_path = '/core/deployment/answers/';
            $session = $request->session()->all();


            $question_file_name = $session['_token'].'.json';
            $sleep_miliseconds = 50;
            $micro_seconds = $sleep_miliseconds * 1000;
            while(file_exists($file_path.$question_file_path.$question_file_name)){
                usleep($micro_seconds); 
            }

            $question_file = fopen($file_path.$question_file_path.$question_file_name,'w') or die("Unable to open file!");
            // question content
            fwrite($question_file, "{\n");
            fwrite($question_file, "    \"question\":\"");
            fwrite($question_file, $question);
            fwrite($question_file, "\"\n");
            fwrite($question_file, "}\n");

            fclose($question_file);
            
            while(!file_exists($file_path.$answer_file_path.$question_file_name)){
                usleep(100); 
            }
            
            // read json file
            $answer = readfile($file_path.$answer_file_path.$question_file_name);
            unlink($file_path.$answer_file_path.$question_file_name);
            print_r($answer);
           
        }
        

    }
    
    public function model_list(Request $request){
        // check admin detals and restriction
        $file_path  = dirname(__FILE__,4);
        $models_file_path = '/core/models/';
        $dir = $file_path.$models_file_path;
        $models_list = scandir($dir);
        $model_length = count($models_list);
        for ($i=2; $i < $model_length; $i++) { 
            echo $dir.$models_list[$i].'<br>';
        }
    }

    public function deploy_model(Request $request){
        // check admin detals and restriction
        $model_folder = $request->input('model_name');
        $file_path  = dirname(__FILE__,4);
        if(is_dir($file_path.'\\core\\models\\'.$model_folder)){
            // write to config file

            // wait 2-5 seconds

            // rewrite the config file
        }else{
            echo 'file does not exist';
            return -1;
        }

    }
}
