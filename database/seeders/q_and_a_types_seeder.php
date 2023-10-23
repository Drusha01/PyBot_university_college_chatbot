<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class q_and_a_types_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('INSERT INTO q_and_a_types VALUES(
            NULL,
            "CCS",
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO q_and_a_types VALUES(
            NULL,
            "IT",
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO q_and_a_types VALUES(
            NULL,
            "CS",
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO q_and_a_types VALUES(
            NULL,
            "CSC",
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO q_and_a_types VALUES(
            NULL,
            "Announcement",
            NOW(),
            NOW()
        );');

    }
}
