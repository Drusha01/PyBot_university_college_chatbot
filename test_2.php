<?php 
    $pyscript = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\python_scripts\\python_test.py';
    $python = "C:\\Python_3.6\\python.exe";

    $output;
    echo exec("$python $pyscript",$output);
?>