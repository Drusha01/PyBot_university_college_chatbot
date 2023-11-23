<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE questions(
            question_id INT PRIMARY KEY AUTO_INCREMENT,
            question_q_and_a_id INT ,
            question_details VARCHAR(2048) ,
            date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
            date_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (question_q_and_a_id) REFERENCES q_and_a(q_and_a_id)


        );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
