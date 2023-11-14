<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class target_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('INSERT INTO target_types VALUES(
            NULL,
            "public",
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO target_types VALUES(
            NULL,
            "student",
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO target_types VALUES(
            NULL,
            "admin",
            NOW(),
            NOW()
        );');
        
    }
}
