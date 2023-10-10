<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Python_executioner extends Controller
{
    //
    public function test(){
        $pyscript = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\python\\python_test.py';
        $python = "C:\\Python_3.6\\python.exe";

        $output;

        return exec("$python $pyscript",$output);
    }

    public function execute_script(){
        $pyscript = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\python\\training.py';
        $python = "C:\\Python_3.6\\python.exe";

        $output;

        return exec("$python $pyscript",$output);
    }
}
