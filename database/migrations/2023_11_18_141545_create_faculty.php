<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaculty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE faculty(
            faculty_id INT PRIMARY KEY AUTO_INCREMENT,
            faculty_picture VARCHAR(50) NOT NULL,
            faculty_fullname VARCHAR(50) NOT NULL,
            faculty_position VARCHAR(1024) NOT NULL,
            faculty_title VARCHAR(1024) NOT NULL,
            faculty_description VARCHAR(1024) NOT NULL,
            faculty_order INT NOT NULL,
            date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
            date_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty');
    }
}
