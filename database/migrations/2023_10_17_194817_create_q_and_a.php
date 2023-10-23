<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQAndA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE q_and_a(
            q_and_a_id INT PRIMARY KEY AUTO_INCREMENT,
            q_and_a_tag VARCHAR(50) ,

            -- q and a category
            q_and_a_type_id INT,
            -- check before sending a response to users / guests
            -- add privacy here
            -- user target here
            -- restriction here
            -- etc 

            date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
            date_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );');

        // DB::statement('CREATE INDEX idx_q_and_a_question_id ON q_and_a(q_and_a_question_id);');
        DB::statement('CREATE INDEX idx_q_and_a_type_id ON q_and_a(q_and_a_type_id);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('q_and_a');
    }
}
