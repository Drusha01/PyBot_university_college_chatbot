<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Python_executioner extends Controller
{
    //
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
}
