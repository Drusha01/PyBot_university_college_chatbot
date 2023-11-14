<?php

namespace App\Http\Livewire\Admin\Model;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Model extends Component
{
    public $python = "C:\\Python_3.6\\python.exe";
    public $intent_lists =[];
    public $intent_data_filter;

    public $model_list =[];
    public $model_list_filter;

    public $selected_intent ;

    public $selected_model;

    public $currently_deployed;



    public function mount(){
        $this->title = 'Model';

        // intent list
        
        $file_path  = dirname(__FILE__,6);
        $intent_file_path = '/core/intent_list/';
        if(!is_dir($file_path.$intent_file_path)){
            mkdir($file_path.$intent_file_path);
        }
        $dir = $file_path.$intent_file_path;
        $intents_list = scandir($dir);
        $intent_length = count($intents_list);

        if($intent_length>2){
            $this->selected_intent = $intent_length-3;
        }
        for ($i=2; $i < $intent_length; $i++) { 
    
            $file_creation_date =  date('Y-m-d H:i:s', filectime($dir.$intents_list[$i]));
            array_push($this->intent_lists,[
                'intent_name'=>$intents_list[$i],
                'directory_path'=>$dir.$intents_list[$i],
                'date_created' =>$file_creation_date ]
            );
        }

        $this->intent_data_filter = [
            'select'=> false,
            '#'=>true,
            'path'=>false ,
            'version'=>true,
            'date_created'=>true
        ];

        // model list

        $file_path  = dirname(__FILE__,6);
        $models_file_path = '/core/model_list/';
        if(!is_dir($file_path.$models_file_path)){
            mkdir($file_path.$models_file_path);
        }
        $dir = $file_path.$models_file_path;
        $models_list = scandir($dir);
        $model_length = count($models_list);

        for ($i=2; $i < $model_length; $i++) { 
    
            $file_creation_date =  date('Y-m-d H:i:s', filectime($dir.$models_list[$i]));
            array_push($this->model_list,[
                'model_name'=>$models_list[$i],
                'directory_path'=>$dir.$models_list[$i],
                'date_created' =>$file_creation_date ]
            );
        }

        $this->model_list_filter = [
            'select'=> false,
            '#'=>true,
            'path'=>false ,
            'model'=>true,
            'date_created'=>true
        ];

        $file_path  = dirname(__FILE__,6);
        $deployment_file = $file_path .'/core/deployment/config/deployment_config.json';
        if(file_exists($deployment_file)){
            // read the deployment config
            $config_data = json_decode(file_get_contents($deployment_file),true);
            
            $this->selected_model = $config_data['model_folder'];
            // dd($this->selected_model);
            
            // dd('dbfisadf');
        }

        // dd($this->model_list);
    }
    public function render()
    {
        return view('livewire.admin.model.model',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }

    public function create_new_intent(){
        $file_path  = dirname(__FILE__,6);
        $intent_file_path = '/core/intent_list/';
        $dir = $file_path.$intent_file_path;
        $intents_list = scandir($dir);
        $intent_length = count($intents_list);

        $version =  $intent_length-2+1;

        
 
        $list_of_questions =DB::table('q_and_a as qa')
            ->get()
            ->toArray();

        // fetch from db to what is the current version
        
        
        $file_path  = dirname(__FILE__,6);
        $intent_file_path = '/core/intent_list/';
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

        $file_path  = dirname(__FILE__,6);
        $intent_file_path = '/core/intent_list/';
        if(!is_dir($file_path.$intent_file_path)){
            mkdir($file_path.$intent_file_path);
        }
        $dir = $file_path.$intent_file_path;
        $intents_list = scandir($dir);
        $intent_length = count($intents_list);
        $this->intent_lists=[];
        for ($i=2; $i < $intent_length; $i++) { 
    
            $file_creation_date =  date('Y-m-d H:i:s', filectime($dir.$intents_list[$i]));
            array_push($this->intent_lists,[
                'intent_name'=>$intents_list[$i],
                'directory_path'=>$dir.$intents_list[$i],
                'date_created' =>$file_creation_date ]
            );
        }

        $this->dispatchBrowserEvent('swal:redirect',[
            'position'          									=> 'center',
            'icon'                                                  => 'success',
            'title'             									=> 'Successfully created an intent data!',
            'showConfirmButton' 									=> 'true',
            'timer'             									=> '1000',
            'link'              									=> '/admin/model'
        ]);
    }
    public function create_new_intent_2(){
        $file_path  = dirname(__FILE__,6);
        $intent_file_path = '/core/intent_list/';
        $dir = $file_path.$intent_file_path;
        $intents_list = scandir($dir);
        $intent_length = count($intents_list);

        $version =  $intent_length-2+1;

        
 
        $list_of_questions =DB::table('q_and_a as qa')
            ->get()
            ->toArray();

        // fetch from db to what is the current version
        
        
        $file_path  = dirname(__FILE__,6);
        $intent_file_path = '/core/intent_list/';
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
                    ->where('qa.q_and_a_id','=',($value->q_and_a_id))
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
                // {
                //     "q_and_a_id":5,
                //     "q_and_a_tag":"",
                //     "q_and_a_type_id":1,
                //     "q_and_a_target_type_id":1,
                //     "date_created":"2023-11-12 13:56:31",
                //     "date_updated":"2023-11-12 13:56:31",
                //     "answer_id":9,
                //     "answer_q_and_a_id":5,
                //     "answer_details":"Here are your stocks!",
                //     "target_type_id":1,
                //     "target_type_details":"public"}
                fwrite($intent_file, "      \"responses\": [");
                $answers_list = DB::table('q_and_a as qa')
                    ->select(
                        'answer_id',
                        'q_and_a_type_details',
                        'answer_id',
                        'answer_details',
                        'target_type_details')
                    ->join('answers as a', 'a.answer_q_and_a_id', '=', 'qa.q_and_a_id')
                    ->join('q_and_a_types as t', 't.q_and_a_type_id', '=', 'qa.q_and_a_type_id')
                    ->join('target_types as tt', 'tt.target_type_id', '=', 'qa.q_and_a_target_type_id')
                    ->where('qa.q_and_a_id','=',($value->q_and_a_id))
                    ->get()
                    ->toArray();
                $answer_length = count($answers_list);
                foreach ($answers_list as $answer_key => $answer_value) {
                    fwrite($intent_file, json_encode($answer_value,JSON_FORCE_OBJECT));
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

        $file_path  = dirname(__FILE__,6);
        $intent_file_path = '/core/intent_list/';
        if(!is_dir($file_path.$intent_file_path)){
            mkdir($file_path.$intent_file_path);
        }
        $dir = $file_path.$intent_file_path;
        $intents_list = scandir($dir);
        $intent_length = count($intents_list);
        $this->intent_lists=[];
        for ($i=2; $i < $intent_length; $i++) { 
    
            $file_creation_date =  date('Y-m-d H:i:s', filectime($dir.$intents_list[$i]));
            array_push($this->intent_lists,[
                'intent_name'=>$intents_list[$i],
                'directory_path'=>$dir.$intents_list[$i],
                'date_created' =>$file_creation_date ]
            );
        }

        $this->dispatchBrowserEvent('swal:redirect',[
            'position'          									=> 'center',
            'icon'                                                  => 'success',
            'title'             									=> 'Successfully created an intent data!',
            'showConfirmButton' 									=> 'true',
            'timer'             									=> '1000',
            'link'              									=> '/admin/model'
        ]);
    }

    public function intent_selected($index){
        dd($index);
    }

    public function train(Request $request){
        if($this->selected_intent>0){
           
           foreach ($this->intent_lists as $key => $value) {
                if($key == $this->selected_intent-1){
                    $intent_path_and_file = ($value['directory_path']);
                    $intent_name = $value['intent_name'];
                }
           }
            $count = count($this->model_list);
            $model_name = 'model_v'.($count+1);
            $max_epoch = $request->input('max_epoch');
            $model_lr = $request->input('model_lr');
    
            if(!$max_epoch){
                $max_epoch = 250 ;
            }
            if(!$model_lr){
                $model_lr = 0.01 ;
            }
    
            $file_path  = dirname(__FILE__,6);
            $models_file_path = '/core/model_list/';
    
            $path = dirname(__FILE__,6).'\\core\\';
            if(!is_dir($path.'model_list\\')){
                mkdir($path.'model_list\\');
            }
    
            $pyscript = $path.'python\\training.py';
            $python = $this->python;
            $output = shell_exec("$python $pyscript $path $model_name $intent_path_and_file $intent_name $max_epoch $model_lr");


            $file_path  = dirname(__FILE__,6);
            $models_file_path = '/core/model_list/';
            if(!is_dir($file_path.$models_file_path)){
                mkdir($file_path.$models_file_path);
            }
            $dir = $file_path.$models_file_path;
            $models_list = scandir($dir);
            $model_length = count($models_list);
            $this->model_list = [];
    
            for ($i=2; $i < $model_length; $i++) { 
        
                $file_creation_date =  date('Y-m-d H:i:s', filectime($dir.$models_list[$i]));
                array_push($this->model_list,[
                    'model_name'=>$models_list[$i],
                    'directory_path'=>$dir.$models_list[$i],
                    'date_created' =>$file_creation_date ]
                );
            }

            if($output){
                
                $this->dispatchBrowserEvent('swal:remove_backdrop',[
                    'position'          									=> 'center',
                    'icon'                                                  => 'success',
                    'title'             									=> 'Ssuccessfully trained data!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
            }else{
                $this->dispatchBrowserEvent('swal:remove_backdrop',[
                    'position'          									=> 'center',
                    'icon'                                                  => 'warning',
                    'title'             									=> 'Error training data!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
            }
           
        }else{
            $this->dispatchBrowserEvent('swal:remove_backdrop',[
                'position'          									=> 'center',
                'icon'                                                  => 'warning',
                'title'             									=> 'Successfully please select data!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);
        }
        
    }
    public function rrmdir($src){
        $dir = opendir($src);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                $full = $src . '/' . $file;
                if ( is_dir($full) ) {
                    self::rrmdir($full);
                }
                else {
                    unlink($full);
                }
            }
        }
        closedir($dir);
        rmdir($src);
    }

    public function end_deployment(){
        
        $file_path  = dirname(__FILE__,6);

        $deployment_file = $file_path .'/core/deployment/config/deployment_config.json';
        if(file_exists($deployment_file)){
            // delete folder
            $dir = $file_path.'/core/deployment';
            self::rrmdir($dir);
            $this->dispatchBrowserEvent('swal:remove_backdrop',[
                'position'          									=> 'center',
                'icon'                                                  => 'success',
                'title'             									=> 'Successfully ended!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);
        }else{
            $this->dispatchBrowserEvent('swal:remove_backdrop',[
                'position'          									=> 'center',
                'icon'                                                  => 'success',
                'title'             									=> 'Successfully ended!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);
        }
    }

    public function deploy_model(){
        if($this->selected_model >=0){
            $file_path  = dirname(__FILE__,6);
            $models_file_path = '/core/model_list/';
            if(!is_dir($file_path.$models_file_path)){
                mkdir($file_path.$models_file_path);
            }
            $dir = $file_path.$models_file_path;
            $models_list = scandir($dir);
            $model_length = count($models_list);

    
            for ($i=2; $i < $model_length; $i++) { 
                if($this->selected_model+2 == $i){
                    // dd($models_list[$i]);
                    $model_folder = $models_list[$i];
                    $file_path  = dirname(__FILE__,6).'\\core\\';
                    if(is_dir($file_path.'model_list\\'.$model_folder)){

                        

                        // delete deployment folder
                        
                        $is_running = false;
                        if(file_exists($file_path.'\\deployment\\config\\deployment_config.json')){
                            
                            $dir = $file_path.'deployment';
                            self::rrmdir($dir);
                        }
                        $config_file = array(
                            'delay'=>25,
                            'threshold'=>.025,
                            'iteration'=>5,
                            'run'=>0,
                            'path_to_questions'=>$file_path.'\\deployment\\questions\\',
                            'path_to_answers'=>$file_path.'\\deployment\\answers\\',
                            'path'=>$file_path,
                            'model_folder'=>$model_folder
                        );

                        if(!is_dir($file_path.'\\deployment')){
                            mkdir($file_path.'\\deployment');
                        }
                        if(!is_dir($file_path.'\\deployment\\questions')){
                            mkdir($file_path.'\\deployment\\questions');
                        }
                        if(!is_dir($file_path.'\\deployment\\answers')){
                            mkdir($file_path.'\\deployment\\answers');
                        }
                        if(!is_dir($file_path.'\\deployment\\config')){
                            mkdir($file_path.'\\deployment\\config');
                        }

                        if(file_exists($file_path.'deployment\\config\\deployment_config.json')){
                            $question_file = fopen($file_path.'\\deployment\\config\\deployment_config.json','w') or die("Unable to open file!");
                            fwrite($question_file, json_encode($config_file));
                            fclose($question_file);
                            // wait 2-5 seconds
                            
                            sleep(1);
                            $pyscript = $file_path.'python\\deployment.py';
                            $python = $this->python;
                
                            $config_path = $file_path.'deployment\\config\\deployment_config.json';
                            return exec("$python $pyscript $config_path");
                        }else{
                            $question_file = fopen($file_path.'deployment\\config\\deployment_config.json','w') or die("Unable to open file!");
                            fwrite($question_file, json_encode($config_file));
                            fclose($question_file);
                            sleep(1);
                            $pyscript = $file_path.'python\\deployment.py';
                            $python = $this->python;
                
                            $config_path = $file_path.'deployment\\config\\deployment_config.json';
                            $this->dispatchBrowserEvent('swal:remove_backdrop',[
                                'position'          									=> 'center',
                                'icon'                                                  => 'success',
                                'title'             									=> 'Successfully deployed!',
                                'showConfirmButton' 									=> 'true',
                                'timer'             									=> '1000',
                                'link'              									=> '#'
                            ]);
                            $output = exec("$python $pyscript $config_path");
                        }
                        $this->selected_model = -1;
                        
                        
                    }else{
                        echo 'file does not exist';
                        return -1;
                    }
                }
            }
        }
    } 
}
